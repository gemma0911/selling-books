<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function index(){
        $query = DB::table('payment')->get();
        return view('template.admin.index',['product'=>$query]);
    }
    public function oder(Request $request){
        $query = DB::table('payment')
        ->join('ship','payment.idShip','=','ship.idShip')
        ->join('paymentmethod','payment.idPaymentMethod','=','paymentmethod.idPaymentMethod')
        ->where('idPayment',$request->idPayment)
        ->select('payment.name','payment.phone','payment.city',
        'payment.district','payment.ward','payment.address','payment.note','ship.nameShip','paymentmethod.namePaymentMethod',
        'payment.idPaymentMethod','payment.idShip',)
        ->get();

        $query2 = DB::table('payment')
        ->join('cart','cart.idPayment','=','payment.idPayment')
        ->join('product','cart.idProduct','=','product.idProduct')
        ->where('payment.idPayment',$request->idPayment)
        ->select('payment.idPayment','product.name','product.idProduct'
        ,'payment.create_at','payment.status','cart.number','product.price','product.price','product.images')->get();

        return view('template.admin.oder',['product'=>$query,'product2'=>$query2]);
    }
    public function deleteoder(Request $request){
        $query = DB::table('cart')->where('idPayment',$request->idPayment)->delete();
        $query = DB::table('payment')->where('idPayment',$request->idPayment)->delete();
        return redirect('/admin');
    }
    public function updateoder(Request $request){
        $query = DB::table('payment')->where('idPayment',$request->idPayment)->update([
            'status'=>3,
        ]);
        return redirect('/admin');
    }
}
