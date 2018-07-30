<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Knowyc;
use Exception;

class KYCController extends Controller
{
    public function __construct()
    {
    }

    public function validateKyc(Request $request)
    {
        $validatedData = $request->validate([
            'account_id' => 'required|alpha_num',
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'sex' => 'required',
            'birthday' => 'required|date',
            'nationality' => 'required',
            'residence' => 'required',
            'us_citizen' => 'required',
            'id_number' => 'required|alpha_num',
            'pic_passport' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
            'pic_portrait' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);

        $account = new Knowyc();
        $account->account_id = $validatedData['account_id'];
        $account->firstname = $validatedData['firstname'];
        $account->lastname = $validatedData['lastname'];
        $account->sex = $validatedData['sex'];
        $account->birthday = $validatedData['birthday'];
        $account->nationality = $validatedData['nationality'];
        $account->residence = $validatedData['residence'];
        $account->us_citizen = $validatedData['us_citizen'];
        $account->id_number = $validatedData['id_number'];

        $account->pic_passport = $validatedData['account_id'].time(). 'a.' .$validatedData['pic_passport']->getClientOriginalExtension();
        $account->pic_portrait = $validatedData['account_id'].time(). 'b.' .$validatedData['pic_portrait']->getClientOriginalExtension();

        // $passport = $validatedData['pic_passport'];
        // $imageFileName=$validatedData['account_id'].time(). '.' . $passport->getClientOriginalExtension();
        
        
        try {
            $account->save();
        } catch (Exception $exception) {
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return view('KYC.duplicate');
            }
        }
        $s3 = \Storage::disk('s3');
        $s3->put('/'.$account->pic_passport, file_get_contents($validatedData['pic_passport']), 'private');
        $s3->put('/'.$account->pic_portrait, file_get_contents($validatedData['pic_portrait']), 'private');
        return view('KYC.success');
        // $url = Storage::disk('s3')->temporaryUrl(
        //     'aa11529268954.jpg',
        
        //     Carbon::now()->addMinutes(1)
        //  );
        // dd($url);
    }
}
