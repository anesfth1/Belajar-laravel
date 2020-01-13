<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sekolahcontroller extends Controller
{
    public function world() {
        return "Hallo world";
    }
     public function jungle() {
        return "Welcome to jungle";
    }
     public function school() {
        return "Eager to learn";
    }
     public function zoo() {
        return "Animal life";
    }
     public function garage() {
        return "Place of goods";
    }
     public function jeniskucing($warna) {
        return "Warna kucing kamu : ".$warna;
    }
     public function kucing($warna=null) {
        if ((!$warna)) {
            return "Anda belum memilih warna ";
        }else {
            return "Warna kucing kamu: ".$warna;
        }
    }
     public function makans($makan=null) {
        if ((!$makan)) {
            return "Anda belum memesan apapun!";
        }else {
            return "Anda memesan ".$makan;
        }
    }
}
