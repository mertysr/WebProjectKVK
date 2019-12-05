<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RandomData extends Model
{
    protected $fillable = ["userId", "name", "address","phoneNumber","company","jobTitle","email","companyEmail","password",
    "ipv4","localIpv4","ipv6","macAddress","userAgent","creditCardNumber","secureNumber","creditCardExpirationDateString",
  ];
}
