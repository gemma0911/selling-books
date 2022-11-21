<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function Cart()
    {
        $cart = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'cart.idProduct', 'product.price')->get();

        $query2 = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
        ->where('cart.idUser', session()->get('idUser'))
        ->select('product.number', 'product.images', 'product.name', 'product.content', 'product.price')->get();
        $count = 0;
        foreach ($query2 as $product) {
            $count = $count + (($product->number) * ($product->price));
        }
        return view('template.cart', ['product' => $cart,'total'=>$count]);
    }
}
