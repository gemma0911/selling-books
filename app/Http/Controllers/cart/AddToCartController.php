<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AddToCartController extends Controller
{
    //
    public function AddToCart(Request $request)
    {

        if($request->id)
        {
            $count = DB::table('cart')
            ->where('idProduct',$request->id)
            ->where('idUser',session()->get('idUser'))
            ->where('idPayment',null)
            ->value('number');

            if($count)
            {
                $query = DB::table('cart')
                ->where('idProduct',$request->get('id'))->where('idPayment',null)
                ->where('idUser',session()->get('idUser'))
                ->update(['number' => $count + 1]);
            } else {
                $query = DB::table('cart')->insert(
                    [
                        'idProduct' => $request->get('id'),
                        'idUser' => session()->get('idUser'),
                        'number' => 1,
                        'create_at' => new DateTime(),
                    ]
                );
            }
        }
    }
}
