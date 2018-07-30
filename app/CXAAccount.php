<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CXAAccount extends Model
{
    protected $fillable = [
        'account_id','lastname','firstname','sex','birth_date','nationality','residence','tel','id_number','email','ethwallet'

    ];
}
