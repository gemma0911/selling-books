<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    public function Cart()
    {
        $cart = DB::table('cart')->join('product','product.idProduct','=','cart.idProduct')
        ->where('cart.idUser',session()->get('idUser'))
        ->select('cart.number','product.images','product.name','product.content','cart.idProduct')->get();
        return view('clients.cart',['product' => $cart]);
    }
}
