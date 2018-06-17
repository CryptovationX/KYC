<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function testing() {
        if(Input::file())
        {
            $image = Input::file('photo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
            $user->image = $filename;
            $user->save();
        }
    }
}
