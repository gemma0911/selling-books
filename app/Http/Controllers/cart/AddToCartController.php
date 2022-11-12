<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AddToCartController extends Controller
{
    //
    public function AddToCart(Request $request){
        if($request->id)
        {
            $count = DB::table('cart')->where('idproduct',$request->get('id'))->value('number');

            if($count)
            {
                $query = DB::table('cart')->where('idproduct',$request->get('id'))
                ->update(['number' => $count+1]);
            } else {
                $query = DB::table('cart')->insert(
                    [
                        'idproduct' => $request->get('id'),
                        'number' => 1,
                    ]
                );
            }
        }
    }
}
