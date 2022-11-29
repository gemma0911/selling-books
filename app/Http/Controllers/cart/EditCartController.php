<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditCartController extends Controller
{
    //
    public function EditToCart(Request $request)
    {
        if ($request->idProduct && $request->number) {
            $query = DB::table('cart')
                ->where('idProduct', $request->get('idProduct'))
                ->where('idUser', session()->get('idUser'))->where('idPayment',null)
                ->update(['number' => $request->number]);
        }
        $query2 = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')->where('idPayment',null)
            ->where('cart.idUser', session()->get('idUser'))
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'cart.idProduct', 'product.price')->get();
        $count = 0;
        foreach ($query2 as $product) {
            $count = $count + (($product->number) * ($product->price));
        }
        return $count;
    }
}
