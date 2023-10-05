<?php

namespace App\Helpers;

class Helper {
    static function makeProductCode($count) {
        return "PRO-" . date("dmy") . "-" . (10001 + $count);
    }

    static function ConvertPrice($price) {
        return "₹ " . $price; 
    }

    static function formatDate($date) {
        return date("d M Y", strtotime($date));
    }
}