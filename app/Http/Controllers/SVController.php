<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SVController extends Controller
{
    public function showSV() {
        $sinhvien = [
            [
                "hoTen" => "Bac",
            "queQuan" => "Hà Nội",
            "namSinh" => 2004,
            ],
        ];

        return view("list-sinhvien")->with(["listSV" => $sinhvien]);
    }
}
