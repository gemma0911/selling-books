<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AddToCartController extends Controller
{
    //
    public function AddToCart(Request $request)
    {

        if($request->id)
        {
            $count = DB::table('users')
            ->join('cart', function($join){
                $join->on('users.id', '=' ,'cart.idUser')
                ->orOn('')
                ->where('idProduct',14);
            })->value('number');

            if($count)
            {
                $query = DB::table('cart')->where('idProduct',$request->get('id'))
                ->update(['number' => $count + 1]);
            } else {
                $query = DB::table('cart')->insert(
                    [
                        'idProduct' => $request->get('id'),
                        'idUser' => session()->get('idUser'),
                        'number' => 1,
                    ]
                );
            }
        }
    }
}
