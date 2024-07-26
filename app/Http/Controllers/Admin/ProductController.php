<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function listProducts() {
        $product = Product::all();
        return view('product.list-product', compact('product'));
    }

    public function addProducts() {
        return view('product.add-product');
    }

    public function addPostProduct(Request $request) {
        $linkImage = '';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $newName = time().'.'.$image->getClientOriginalExtension();
            $linkStorage = "imageProducts/";
            $image->move(public_path($linkStorage), $newName);
            $linkImage = $linkStorage . $newName;
        }

        $data = $request->all();
        // dd($data);
        $insert = Product::create($data);
        return redirect()->route('admin.products.listProducts');

    }
    public function destroy($id) {
        $delete = Product::findOrFail($id);
        // dd($data);
        $delete->delete();
        return redirect()->route('admin.products.listProducts');

    }

    public function update($id) {
        $product = Product::findOrFail($id);
        return view('product.update-product', compact('product'));
    }

    public function updatePostProduct(Request $request, $id) {
        $data = $request->all();
        // dd($data);
        $update = Product::findOrFail($id);
        $update->update($data);
        return redirect()->route('admin.products.listProducts');

    }

}
