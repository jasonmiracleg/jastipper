<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        // Retrieve orders with their order details where jastiper_id is 2 and the order is checked out
        $orders = Order::whereHas('orderDetails.jastip_product', function ($query) {
            $query->where('jastiper_products.jastiper_id', 2);
        })
            ->where('is_checked_out', '1')
            ->with(['orderDetails.jastip_product.product'])
            ->get();

        return view('Jastiper.home', compact('orders'));
    }
}
