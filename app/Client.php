<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = [
        'email',
        'join_date'
    ];

    public function payments() 
    {
        return $this->hasMany('\App\Payment');
    }
}
