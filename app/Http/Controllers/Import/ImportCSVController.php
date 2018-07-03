<?php

namespace App\Http\Controllers\Import;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Filesystem;
use Validator;
use Exception;
use Session;
use App\Knowyc;
use Carbon\Carbon;
use Mail;
use App\Mail\Welcome;

class ImportCSVController extends Controller
{
    public function getIndex()
    {
        return view('import.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sheet' => 'required'
        ]);
        try {
            $datas = $this->csvToArray($validatedData['sheet']);
        } catch (Exception $exception) {
            Session::flash('error', 'The file imported is not a .csv file');
            return redirect()->route('import.index');
        }
        // dd($datas[0]);
        foreach ($datas as $key => $data) {
            if ($datas[$key]['check'] == 'Approved') {
                try {
                    $datas[$key]['birthday'] = Carbon::parse($datas[$key]['birthday']);
                } catch (Exception $exception) {
                }
                Knowyc::updateOrCreate(['account_id' => $datas[$key]['account_id']], $datas[$key]);
            }
        }
        Session::flash('success', 'The data had been added or updated successfully');
        return redirect()->route('import.index');
    }
    
    public function s3()
    {
        while ($data = Knowyc::where('pic_passport', 'LIKE', '%'.'https://drive.google'.'%')->first()) {
            $passport = file_get_contents(str_replace('open', 'uc', $data['pic_passport']));
            $selfie = file_get_contents(str_replace('open', 'uc', $data['pic_portrait']));
            $s3 = \Storage::disk('s3');

            $data['pic_passport'] = $this->v4();
            $data['pic_portrait'] = $this->v4();
            $s3->put('/'.$data['pic_passport'], $passport, 'public');
            $s3->put('/'.$data['pic_portrait'], $selfie, 'public');
            $data->save();
        }
        // dd($no);
    }

    public function sendMail()
    {
        Mail::to('info@cryptovation.co')->send(new Welcome);
    }

    public function csvToArray($filepath = '', $delimiter = ',')
    {
        if (!file_exists($filepath) || !is_readable($filepath)) {
            return false;
        }

        $header = null;
        $data = array();
        if (($handle = fopen($filepath, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }

    public static function v4()
    {
        return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

    // 32 bits for "time_low"
    mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),

    // 16 bits for "time_mid"
    mt_rand(0, 0xffff),

    // 16 bits for "time_hi_and_version",
    // four most significant bits holds version number 4
    mt_rand(0, 0x0fff) | 0x4000,

    // 16 bits, 8 bits for "clk_seq_hi_res",
    // 8 bits for "clk_seq_low",
    // two most significant bits holds zero and one for variant DCE1.1
    mt_rand(0, 0x3fff) | 0x8000,

    // 48 bits for "node"
    mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
    }
}
