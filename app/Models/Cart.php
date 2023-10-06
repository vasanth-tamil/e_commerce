<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $table = 'cart';

    protected $fillable = [
        "user_id",
        "product_id",
        "qty"
    ];

    public $timestamps = false;

    function product() {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
}
