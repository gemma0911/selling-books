<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AddToCartController extends Controller
{
    //
    public function AddToCart(Request $request)
    {
        $count = DB::table('cart')
            ->where('idProduct', $request->id)
            ->where('idUser', session()->get('idUser'))
            ->where('idPayment', null)
            ->value('number');

        $number = DB::table('product')->where('idProduct', $request->id)->value('numberProduct');
        if ($number > 0) {
            if ($count) {
                $query = DB::table('cart')
                    ->where('idProduct', $request->get('id'))->where('idPayment', null)
                    ->where('idUser', session()->get('idUser'))
                    ->update(['number' => $count + 1]);
                    Session::flash('success', 'Thêm thành công');
            } else {
                $query = DB::table('cart')->insert(
                    [
                        'idProduct' => $request->get('id'),
                        'idUser' => session()->get('idUser'),
                        'number' => 1,
                        'create_at' => new DateTime(),
                    ]
                );
                Session::flash('success', 'Thêm thành công');
            }
        } else if ($number == 0) {
            Session::flash('error', 'số lượng hàng đã hết');
        }
    }
}
