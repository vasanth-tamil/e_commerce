<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "country",
        "state",
        "zip",
        "city",
        "address_1",
        "address_2",
        "user_id",
        "status"
    ];
}
