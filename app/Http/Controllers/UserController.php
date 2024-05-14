<?php

namespace App\Http\Controllers;

use App\Models\JastiperProduct;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function jastip_index()
    {
        // Retrieve JastiperProduct instances where jastiper_id is 2
        $products = JastiperProduct::where('jastiper_id', 2)->get(); // Use get() to execute the query and retrieve the instances
        $user = User::where('id',2)->first();

        // Access the jastips relationship on each JastiperProduct instance
        $jastips = $products->map(function ($product) {
            return $product->jastips;
        });
        return view('Jastiper.account', compact('jastips','user'));
    }
}
