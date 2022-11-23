<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailProductController extends Controller
{
    //
    public function index(Request $request) {
            $query['data'] = DB::table('product')->where('idProduct',$request->idProduct)->get();
            return view("template.productdetail",$query);
    }
}
