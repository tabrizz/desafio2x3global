<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DollarPrice extends Model
{
    //
    protected $fillable = [
        'price',
        'fetch_date'
    ];
}
