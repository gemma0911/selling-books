<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PaymentController extends Controller
{
    //
    public function index()
    {
        $cart = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'cart.idProduct', 'product.price')->get();

        $query2 = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'product.price')->get();
        $count = 0;
        foreach ($query2 as $product) {
            $count = $count + (($product->number) * ($product->price));
        }
        return view("template.payment", ['product' => $cart, 'total' => $count]);
    }
}
