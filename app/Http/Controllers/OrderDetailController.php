<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function addCart(Request $request)
    {
        $latestOrder = Order::where('user_id', 1)->latest('order_time')->first();

        if ($latestOrder && $latestOrder->is_checked_out == '0') {
            // If the latest order hasn't been checked out, use the same order ID
            $orderId = $latestOrder->id;
        } else {
            // If there's no previous order or the latest one has been checked out, create a new order
            $order = Order::create([
                'user_id' => 1,
                'order_time' => now()
            ]);
            $orderId = $order->id;
        }

        $product = Product::where('id', $request->productId)->first();
        $orderDetail = new OrderDetail();
        $orderDetail->jastiper_product_id = $product->id; // Assuming $productId is the ID of the product being ordered
        $orderDetail->order_id = $orderId; // Use the determined order ID
        $orderDetail->total_price_on_purchase = $product->price * 1;
        $orderDetail->unit_price_on_purchase = $product->price;
        $orderDetail->quantity = 1;
        $orderDetail->save();

        return redirect()->route('customer.navcart'); 
    }

    public function cart()
    {
        // Retrieve the latest unchecked out order for the given user ID
        $latestUncheckedOutOrder = Order::where('user_id', 1)
            ->where('is_checked_out', '0') // Assuming 'is_checked_out' is a boolean column
            ->latest('order_time')
            ->first();

        if ($latestUncheckedOutOrder) {
            // Eager load the 'orderDetail' relationship
            $orderDetails = OrderDetail::where('order_id', $latestUncheckedOutOrder->id)
                ->get();
            $products = $orderDetails->map(function ($orderDetails) {
                return $orderDetails->jastip_product;
            });

            return view('Customer.cart', compact('products'));
        }

        // If there are no unchecked out orders, handle this case accordingly
        // For example, you could display a message indicating that the cart is empty

        return view('Customer.cart')->with('products', collect()); // Passing an empty collection
    }


    public function checkout()
    {
    }
}
