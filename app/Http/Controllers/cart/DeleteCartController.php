<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
class DeleteCartController extends Controller
{
    //
    public function DeleteToCart(Request $request)
    {
        if ($request->idProduct) {
            $delete = DB::table('cart')
            ->join('product','product.idProduct','=','cart.idProduct')
            ->where('idPayment',null)
            ->where('cart.idUser',session()->get('idUser'))
            ->where('cart.idProduct',$request->idProduct)
            ->delete();
            return view("template.component.resultcart");
        }
    }
}
