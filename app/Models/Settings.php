<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'SiteName',
        'SiteLogo',
        'favicon',
        'SiteDescription',
        'Email',
        'Phone',
        'PhoneOptional',
        'Address'
    ];
    use HasFactory;
}
