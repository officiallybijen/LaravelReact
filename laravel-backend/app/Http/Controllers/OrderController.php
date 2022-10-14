<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use App\Models\order_product;

class OrderController extends Controller
{

    public function after_checkout()
    {
        $total_price = request('total_price');
        $quantity = request('quantity');
        $inserted_order = order::create([
            'user_id' => request('user_id'), //guest user
            'quantity' => $quantity,
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'status' => "pending",
            'address' => request('address'),
            'email' => request('email'),
            'mobile_num' => request('mobile_num'),
            'total_price' => $total_price
        ]);
        foreach (request('products') as $d) {
            $data = $d;
            order_product::create([
                'product_id' => $data['id'],
                'order_id' => $inserted_order->id,
                'quantity' => $data['qty'],
                'per_price' => $data['price']
            ]);
        }

        return "success";
    }
}
