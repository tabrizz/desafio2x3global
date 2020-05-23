<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoGenerateUuid;

class Payment extends Model
{
    use AutoGenerateUuid;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'payment_date',
        'expires_at',
        'status',
        'client_id',
        'clp_usd',
    ];

    public function client()
    {
        return $this->hasOne('\App\Client');
    }
}
