<?php

namespace App\Helpers;

class Helper {
    static function makeProductCode($count) {
        return "PRO-" . date("dmy") . "-" . (10001 + $count);
    }

    static function ConvertPrice($price) {
        setlocale(LC_MONETARY, 'en_IN');
        return "₹ " . number_format($price);
    }

    static function formatDate($date) {
        return date("d M Y", strtotime($date));
    }
}