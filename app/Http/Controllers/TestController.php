<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use App\Knowyc;
use App\googleread;

class TestController extends Controller
{
    public function test()
    {
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
            $read->id_number = "-";
        }
        if (preg_match($firstname, $fulltext, $m2, PREG_OFFSET_CAPTURE)) {
            $read->firstname = $m2[0][0];
        } else {
            $read->firstname = "-";
        }
        if (preg_match($lastname, $fulltext, $m3, PREG_OFFSET_CAPTURE)) {
            $read->lastname = $m3[0][0];
        } else {
            $read->lastname = "-";
        }
        if (preg_match($sex, $fulltext, $m4, PREG_OFFSET_CAPTURE)) {
            $read->sex = $m4[0][0];
        } else {
            $read->sex = "-";
        }
        if (preg_match($nationality, $fulltext, $m5, PREG_OFFSET_CAPTURE)) {
            $read->nationality = $m5[0][0];
        } else {
            $read->nationality = "-";
        }
        if (preg_match($residence, $fulltext, $m6, PREG_OFFSET_CAPTURE)) {
            $read->residence = $m6[0][0];
        } else {
            $read->residence = "-";
        }
        $read->save();
        return view('KYCCheck.index')->withRead($read);
    }
}
