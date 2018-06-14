<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KYCController extends Controller
{
    public function __construct()
    {

    }

    public function validate(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|unique:posts|max:255',
            'lastname' => 'required',
        ]);
    }


}
col-md-3