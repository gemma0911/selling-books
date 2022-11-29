<?php

namespace App\Http\Controllers\oder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OderController extends Controller
{
    //
    public function index(){
        $query = DB::table('payment')
        ->join('cart','cart.idPayment','=','payment.idPayment')
        ->join('product','cart.idProduct','=','product.idProduct')
        ->where('payment.idUser',session()->get('idUser'))
        ->select('payment.idPayment','product.name','payment.idPayment','payment.create_at','payment.status','cart.number','product.price','product.price','product.images')->get();
        return view('template.oder',['product'=>$query]);
    }
}
