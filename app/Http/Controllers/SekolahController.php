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
     public function jual($makan = null, $harga = null){
        if (isset($makan)) {
            echo "Anda membeli ".$makan;
        } if (isset($harga)) {
            if ($harga >= 15000) {
                echo " dengan ukuran Jumbo";
            } elseif ($harga < 15000 && $harga >= 7500) {
                echo " dengan ukuran Medium";
            } elseif ($harga < 7500 && $harga >= 7500) {
                echo " dengan ukuran Small";
            } else {
                echo ", Maaf anda salah memasukan angka";
            }
        } if(!$makan){
            echo "Anda belum memesan";
        }
    }
}
