<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct() {
        $data = [
            [
                "id" => "1",
                "name" => "iphone14"
            ],
            [
                "id" => "2",
                "name" => "iphone12"
            ],
        ];
        return view("list-product")-> with(["listProduct" => $data]);
    }
    public function getProduct($id, $name = "") {
        echo $id, $name;
    }
    public function updateProduct(Request $request) {
        echo $request -> id;
        echo $request -> name;
    }


}
