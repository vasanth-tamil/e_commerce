<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "code",
        "name",
        "description",
        "image",
        "stocks",
        "price",
        "category_id",
        "sub_category_id",
        "status"
    ];

    function category() {
        return $this->belongsTo('App\Models\Category');
    }

    function subCategory() {
        return $this->hasOne('App\Models\SubCategory', 'id', 'sub_category_id');
    }
}
