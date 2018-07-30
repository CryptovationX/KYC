<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CXAHistory extends Model
{
    protected $fillable = [
        'account_id','lastname','firstname','price','type','amount_usd','token','bonus','total_token'

    ];
}
