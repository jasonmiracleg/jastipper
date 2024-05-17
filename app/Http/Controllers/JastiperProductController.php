<?php

namespace App\Http\Controllers;

use App\Models\JastiperProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class JastiperProductController extends Controller
{
    public function home_customer(){
        return view('Customer.index');
    }

    public function create(){
        return view('Jastiper.addProduct');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'productName' => 'required',
            'price' => 'required',
            'productImage' => 'required',
        ]);
        $productPicture = $request->file('productImage');
        $imageName = time() . '_' . $productPicture->getClientOriginalName();
        $productPicture->move(\public_path("/assets/image"), $imageName);
        $product = Product::create([
            'product_name' => $validatedData['productName'],
            'price' => $validatedData['price'],
            'description' => optional($request->description)->getContent(),
            'picture' => $imageName
        ]);
        JastiperProduct::create([
            'jastiper_id' => $request->user_id,
            'product_id' => $product->id,
        ]);
        return redirect()->route('Jastiper.account');
    }
}
