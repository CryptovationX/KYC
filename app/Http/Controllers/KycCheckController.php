<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Knowyc;
use Carbon\Carbon;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use App\googleread;

class KycCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kyc = Knowyc::where('status', "unconfirmed")->where('users', null)->first();
        if ($kyc == null) {
            $kyc = Knowyc::where('status', "Pending")->where('users', null)->first();
            if ($kyc == null) {
                return view('KYC.approve');
            }
        }
        $kyc->users = "active";
        $kyc->save();
        $kyc->pic_passport = $this->getImagewithdim($kyc->pic_passport);
        $kyc->pic_portrait = $this->getImage($kyc->pic_portrait);
        $count = Knowyc::count();
        $kyc->pre = $kyc->id - 1;
        $kyc->post = $count - $kyc->id;
        
        //--------------------------------googleread---------------------------------//
        # instantiates a client
        $imageAnnotator = new ImageAnnotatorClient();
        # the name of the image file to annotate
        $fileName = 'https://drive.google.com/uc?id=1SJOBIdHENOmudplzFvM2xKyrAZdhaeyJ';
        # prepare the image to be annotated
        $image = file_get_contents($fileName);
        # performs label detection on the image file
        $response = $imageAnnotator->documentTextDetection($image);
        $fulltext = $response->getFullTextAnnotation()->gettext();
        // $text = $response->getTextAnnotations();
        // dd($fulltext);

        $kyc = Knowyc::find(1);
        $read = new googleread;
        $id_number = "/".$kyc->id_number."/i";
        $firstname = "/".$kyc->firstname."/i";
        $lastname = "/".$kyc->lastname."/i";
        $sex = "/\b".$kyc->sex."\b/i";
        $nationality = "/".$kyc->nationality."/i";
        $residence = "/".$kyc->residence."/i";

        if (preg_match($id_number, $fulltext, $m1, PREG_OFFSET_CAPTURE)) {
            $read->id_number = $m1[0][0];
        } else {
            $read->id_number = "mismatch";
        }
        if (preg_match($firstname, $fulltext, $m2, PREG_OFFSET_CAPTURE)) {
            $read->firstname = $m2[0][0];
        } else {
            $read->firstname = "mismatch";
        }
        if (preg_match($lastname, $fulltext, $m3, PREG_OFFSET_CAPTURE)) {
            $read->lastname = $m3[0][0];
        } else {
            $read->lastname = "mismatch";
        }
        if (preg_match($sex, $fulltext, $m4, PREG_OFFSET_CAPTURE)) {
            $read->sex = $m4[0][0];
        } else {
            $read->sex = "mismatch";
        }
        if (preg_match($nationality, $fulltext, $m5, PREG_OFFSET_CAPTURE)) {
            $read->nationality = $m5[0][0];
        } else {
            $read->nationality = "mismatch";
        }
        if (preg_match($residence, $fulltext, $m6, PREG_OFFSET_CAPTURE)) {
            $read->residence = $m6[0][0];
        } else {
            $read->residence = "mismatch";
        }
        $read->save();
        return view('KYCCheck.index')->withInfo($kyc)->withRead($read);
    }

    public function ApproveStatus($id)
    {
        $kyc = Knowyc::find($id);
        $kyc->status = "Approved";
        $kyc->users = null;
        $kyc->save();
    
        return redirect()->route('kyccheck');
    }

    public function refresh()
    {
        $kyc = Knowyc::where('users', "active")->update(array('users' => null));

        return redirect()->route('kyccheck');
    }
    
    public function getPending()
    {
        $kyc = Knowyc::where('status', "Pending")->first();
        $kyc->pic_passport = $this->getImagewithdim($kyc->pic_passport);
        $kyc->pic_portrait = $this->getImage($kyc->pic_portrait);
        $count = Knowyc::count();
        $kyc->pre = $kyc->id - 1;
        $kyc->post = $count - $kyc->id;
       
        return view('KYCCheck.index')->withInfo('$kyc');
    }

    public function PendingStatus($id)
    {
        $kyc = Knowyc::find($id);
        $kyc->status = "Pending";
        $kyc->users = null;
        $kyc->save();
    
        return redirect()->route('kyccheck');
    }

    public function RejectStatus($id)
    {
        $kyc = Knowyc::find($id);
        $kyc->status = "Reject";
        $kyc->users = null;
        $kyc->save();
    
        return redirect()->route('kyccheck');
    }
    
    public function updateNote(Request $request)
    {
        $kyc = Knowyc::where('users', "active")->first();
        $kyc->note = $request->comment;
        $kyc->save();
        $kyc->pic_passport = $this->getImagewithdim($kyc->pic_passport);
        $kyc->pic_portrait = $this->getImage($kyc->pic_portrait);
        $count = Knowyc::count();
        $kyc->pre = $kyc->id - 1;
        $kyc->post = $count - $kyc->id;
        
        return view('KYCCheck.index')->withInfo($kyc);
    }

    
    public function getNext($id)
    {
        $kyc = Knowyc::find($id);
        $kyc->users = null;
        $kyc->save();

        $kyc = Knowyc::find($id+1);
        $kyc->users = "active";
        $kyc->save();
        $kyc->pic_passport = $this->getImagewithdim($kyc->pic_passport);
        $kyc->pic_portrait = $this->getImage($kyc->pic_portrait);
        $count = Knowyc::count();
        $kyc->pre = $kyc->id - 1;
        $kyc->post = $count - $kyc->id;
        
        return view('KYCCheck.index')->withInfo($kyc);
    }

        
    public function getPrevious($id)
    {
        $kyc = Knowyc::find($id);
        $kyc->users = null;
        $kyc->save();

        $kyc = Knowyc::find($id-1);
        $kyc->users = "active";
        $kyc->save();
        $kyc->pic_passport = $this->getImagewithdim($kyc->pic_passport);
        $kyc->pic_portrait = $this->getImage($kyc->pic_portrait);
        $count = Knowyc::count();
        $kyc->pre = $kyc->id - 1;
        $kyc->post = $count - $kyc->id;
        
        return view('KYCCheck.index')->withInfo($kyc);
    }

    public function getImagewithdim($name)
    {
        $url[0] = Storage::disk('s3')->temporaryUrl(
            $name,
        
            Carbon::now()->addSeconds(5)
        );

        list($width, $height) = getimagesize($url[0]);
        
        if ($width > $height) {
            $url['width'] = 300;
            $url['height'] = $height/$width*300;
        } else {
            $url['height'] = 300;
            $url['width'] = $width/$height*300;
        }

        return $url;
    }

    public function getImage($name)
    {
        $url = Storage::disk('s3')->temporaryUrl(
            $name,
        
            Carbon::now()->addSeconds(5)
        );

        return $url;
    }
}
