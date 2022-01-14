<?php


namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function addToCart()
    {
        return response()->json([
            'notificationText' => 'Product was successfully added to your cart',
        ]);
    }
}
