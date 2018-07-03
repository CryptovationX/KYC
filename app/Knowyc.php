<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowyc extends Model
{
    protected $fillable = [

        'account_id','lastname','firstname','sex','birthday','nationality','residence','us_citizen','id_number','email','telegram','twitter','address','pic_passport' ,'pic_portrait'
    
    ];
}
