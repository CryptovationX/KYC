<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Knowyc;
use Carbon\Carbon;
use Exception;
use App\CXAAccount;
use App\CXAHistory;

class UserCXAController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        return view('UserCXA.index');
    }
    public function getNextOrderNumber()
    {
        $lastId = CXAAccount::orderBy('created_at', 'desc')->first();
        if (! $lastId) {
            $number = 0;
        } else {
            $number = substr($lastId->account_id, 4);
        }
        $account_id = 'CXAX' . sprintf('%04d', intval($number) + 1);
        return view('UserCXA.create')->withAccountid($account_id);
    }
    public function validateUser(Request $request)
    {
        // $validatedData = $request->validate([
        //     'account_id' => 'required|alpha_num',
        //     'firstname' => 'required|alpha',
        //     'lastname' => 'required|alpha',
        //     'sex' => 'required',
        //     'birthday' => 'required|date',
        //     'nationality' => 'required',
        //     'residence' => 'required',
        //     'id_number' => 'required|alpha_num',
        //     'email'=>'required',
        // ]);
        
        // $account = new CXAAccount();
        // $account->account_id = $validatedData['account_id'];
        // $account->firstname = $validatedData['firstname'];
        // $account->lastname = $validatedData['lastname'];
        // $account->sex = $validatedData['sex'];
        // $account->birth_date = $validatedData['birthday'];
        // $account->nationality = $validatedData['nationality'];
        // $account->residence = $validatedData['residence'];
        // $account->id_number = $validatedData['id_number'];
        // $account->email = $validatedData['email'];
        $account = new CXAAccount();
        $account->account_id = $request['account_id'];
        $account->firstname = $request['firstname'];
        $account->lastname = $request['lastname'];
        $account->sex = $request['sex'];
        $account->birth_date = $request['birthday'];
        $account->nationality = $request['nationality'];
        $account->residence = $request['residence'];
        $account->id_number = $request['id_number'];
        $account->email = $request['email'];
        $account->ethwallet = $request['ethwallet'];
        $account->tel = $request['tel'];

        try {
            $account->save();
            $balance = new CXAHistory();
            $balance->account_id = $request['account_id'];
            $balance->firstname = $request['firstname'];
            $balance->lastname = $request['lastname'];
            $balance->type = $request['type'];
            $balance->amount_usd = $request['amount_usd'];
            $balance->price = $request['price'];
            $balance->token = $request['token'];
            $balance->bonus = $request['bonus'];
            $balance->total_token = $request['total_token'];
            $balance->save();
            return view('UserCXA.success');
        } catch (Exception $exception) {
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return view('UserCXA.duplicate');
            }
        }
    }
    public function search(Request $request)
    {
        if ($user = CXAAccount::where('account_id', $request->account_id)->first()!==null) {
            $user = CXAAccount::where('account_id', $request->account_id)->first();
            $balance = CXAHistory::where('account_id', $request->account_id)->get();
            $sum_token = 0;
            for ($i=0; $i < count($balance) ; $i++) {
                $sum_token += $balance[$i]->total_token;
            }
            return view('UserCXA.search')->withInfo($user)->withBalances($balance)->withSum($sum_token);
        } else {
            if ($user = CXAAccount::where('firstname', $request->firstname)->first()!==null) {
                $user = CXAAccount::where('firstname', $request->firstname)->first();
                $balance = CXAHistory::where('firstname', $request->firstname)->get();
                $sum_token = 0;
                for ($i=0; $i < count($balance) ; $i++) {
                    $sum_token += $balance[$i]->total_token;
                }
                return view('UserCXA.search')->withInfo($user)->withBalances($balance)->withSum($sum_token);
            } else {
                if ($user = CXAAccount::where('lastname', $request->lastname)->first()!==null) {
                    $user = CXAAccount::where('lastname', $request->lastname)->first();
                    $balance = CXAHistory::where('lastname', $request->lastname)->get();
                    $sum_token = 0;
                    for ($i=0; $i < count($balance) ; $i++) {
                        $sum_token += $balance[$i]->total_token;
                    }
                    return view('UserCXA.search')->withInfo($user)->withBalances($balance)->withSum($sum_token);
                } else {
                    return view('UserCXA.error')->withInfo("User Not Found");
                }
            }
        }
    }
    public function addRecord(Request $request)
    {
        $account = CXAAccount::where('account_id', $request->id)->first();
        $balance = new CXAHistory();
        $balance->account_id = $request->id;
        $balance->firstname = $account->firstname;
        $balance->lastname = $account->lastname;
        $balance->type = $request->type;
        $balance->amount_usd = $request->amount_usd;
        $balance->price = $request->price;
        $balance->token = $request->token;
        $balance->bonus = $request->bonus;
        $balance->total_token = $request->total_token;
        $balance->save();
        $balance = CXAHistory::where('account_id', $request->id)->get();
        $sum_token = 0;
        for ($i=0; $i < count($balance) ; $i++) {
            $sum_token += $balance[$i]->total_token;
        }
        return view('UserCXA.search')->withInfo($account)->withBalances($balance)->withSum($sum_token);
    }
}
