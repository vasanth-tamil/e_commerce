<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "product_id",
        "order_id",
        "status",
        "qty",
        "total_price"
    ];
}
