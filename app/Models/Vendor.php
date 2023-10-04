<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        "logo",
        "company_name",        
        "owner_name",        
        "phone_1",        
        "phone_2",

        "country",        
        "state",        
        "zip",        
        "city",        
        "address_1",        
        "address_2",

        "website",        
        "facebook",        
        "instagram",  
        "email"    
    ];
}
