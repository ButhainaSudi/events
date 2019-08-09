<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_business extends Model
{
    protected $primaryKey = 'business_email';
    public $incrementing = false;
    protected $keyType = 'string';
}
