<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "user_id",
        "address_id",
        "vendor_id",
        "status",
        "total_price"
    ];

    function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
