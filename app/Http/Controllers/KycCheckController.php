<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kyccheck;
use Illuminate\Support\Facades\Redirect;

class KycCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kyc = kyccheck::where('status',"unconfirmed")->where('users',NULL)->first();
        $kyc->users = "active";
        $kyc->save();
        
        $id = $kyc->id;
        $firstname = $kyc->firstname;
        $lastname = $kyc->lastname;
        $email = $kyc->email;
        $check = $kyc->status;
        $note = $kyc->note;
        return view('kyccheck')->withId($id)->withFname($firstname)->withLname($lastname)
        ->withEmail($email)->withStatus($check)->withComment($note);
    }


    public function ApproveStatus($id)
    {
        $kyc = kyccheck::find($id);
        $kyc->status = "Approved";
        $kyc->users = null;
        $kyc->save();
    
        return redirect()->route ('kyccheck');

    }

    public function refresh()
    {
        $kyc = kyccheck::where('users', "active")->update(array('users' => null));
        return redirect()->route ('kyccheck');
    }
    
    public function getPending()
    {
        $kyc = kyccheck::where('status', "Pending")->first();
        
        
        $id = $kyc->id;
        $firstname = $kyc->firstname;
        $lastname = $kyc->lastname;
        $email = $kyc->email;
        $check = $kyc->status;
        $note = $kyc->note;
       
        return view('kyccheck')->withId($id)->withFname($firstname)->withLname($lastname)
        ->withEmail($email)->withStatus($check)->withComment($note);
    
    }

    public function PendingStatus($id)
    {
        $kyc = kyccheck::find($id);
        $kyc->status = "Pending";
        $kyc->users = null;
        $kyc->save();
    
        return redirect()->route ('kyccheck');

    }

    public function RejectStatus($id)
    {
        $kyc = kyccheck::find($id);
        $kyc->status = "Reject";
        $kyc->users = null;
        $kyc->save();
    
        return redirect()->route ('kyccheck');

    }
    
    public function updateNote(Request $request)
    { 
        $kyc = kyccheck::where('users',"active")->first();
        $kyc->note = $request->comment;
        $kyc->save();
        
        $id = $kyc->id;
        $firstname = $kyc->firstname;
        $lastname = $kyc->lastname;
        $email = $kyc->email;
        $check = $kyc->status;
        $note = $kyc->note;
       
        return view('kyccheck')->withId($id)->withFname($firstname)->withLname($lastname)
        ->withEmail($email)->withStatus($check)->withComment($note);
    }

    
    public function getNext($id)
    {
        $kyc = kyccheck::find($id+1);
        $kyc->users = null;

        $id = $kyc->id;
        $firstname = $kyc->firstname;
        $lastname = $kyc->lastname;
        $email = $kyc->email;
        $check = $kyc->status;
        $users = $kyc->users;
        $note = $kyc->note;
        return view('kyccheck')->withId($id)->withFname($firstname)->withLname($lastname)
        ->withEmail($email)->withStatus($check)->withUsers($users)->withComment($note);
    }

        
    public function getPrevious($id)
    {
        
        $kyc = kyccheck::find($id-1);
        $kyc->users = null;

        $id = $kyc->id;
        $firstname = $kyc->firstname;
        $lastname = $kyc->lastname;
        $email = $kyc->email;
        $check = $kyc->status;
        $users = $kyc->users;
        $note = $kyc->note;
        return view('kyccheck')->withId($id)->withFname($firstname)->withLname($lastname)
        ->withEmail($email)->withStatus($check)->withUsers($users)->withComment($note);
    }

}
