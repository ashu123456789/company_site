<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model
{
    use HasFactory;
    protected $table = 'ip_addresses';
    protected $fillable = ['ip','zip','lat','lan','country','city','countryCode'];

}    
