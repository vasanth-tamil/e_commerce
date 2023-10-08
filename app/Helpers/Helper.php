<?php

namespace App\Helpers;

class Helper {
    static function makeProductCode($count) {
        return "PRO-" . date("dmy") . "-" . (10001 + $count);
    }

    static function makeOrderCode($count) {
        return "ORD-" + date("dmy") . "-" . (10001 + $count);
    }

    static function ConvertPrice($price) {
        setlocale(LC_MONETARY, 'en_IN');
        return "₹ " . number_format($price);
    }

    static function formatDate($date) {
        return date("d M Y", strtotime($date));
    }

    static function formatDateTime($date) {
        return date("d M Y (h:m A)", strtotime($date));
    }
}