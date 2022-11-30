<?php

namespace App\Http\Controllers\oder;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class OderController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'name' => 'required',
                'city' => 'required',
                'district' => 'required',
                'ward' => 'required',
                'address' => 'required',
                'note' => 'required',
                'idShip' => 'required',
                'idPaymentMethod' => 'required',
                'phone' => 'required',

            ],
            [
                'name.required' => 'Vui lòng nhập tên người nhận',
                'city.required' => 'Vui lòng chọn tỉnh',
                'district.required' => 'Vui lòng chọn huyện',
                'ward.required' => 'Vui lòng chọn xã',
                'address.required' => 'Vui lòng chọn địa chỉ',
                'note.required' => 'Vui lòng điền ghi chú',
                'idShip.required' => 'Vui lòng chọn phương thức giao hàng',
                'idPaymentMethod.required' => 'Vui lòng chọn phương thức thanh toán',
                'phone.required' => 'Vui lòng nhập số điện thoại',
            ]
        );
    }
    //
    public function index()
    {
        $query = DB::table('payment')
            ->where('payment.idUser', session()->get('idUser'))
            ->get();
        // ->join('cart','cart.idPayment','=','payment.idPayment')
        // ->join('product','cart.idProduct','=','product.idProduct')
        // ->where('payment.idUser',session()->get('idUser'))
        // ->select('payment.idPayment','product.name','payment.idPayment','payment.create_at'
        // ,'payment.status','cart.number','product.price','product.price','product.images')->get();
        return view('template.oder', ['product' => $query]);
    }
    public function oderdetail(Request $request)
    {
        $cart = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))->where('idPayment', $request->idPayment)
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'cart.idProduct', 'product.price')->get();

        $query2 = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))->where('idPayment', $request->idPayment)
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'product.price')
            ->get();
        $query3 = DB::table('payment')->where('idPayment',$request->idPayment)->get();

        $count = 0;
        foreach ($query2 as $product) {
            $count = $count + (($product->number) * ($product->price));
        }
        $paymentmethod = DB::table('paymentmethod')->get();
        $ship = DB::table('ship')->get();
        return view("template.oderdetail", ['product' => $cart, 'total' => $count, 'paymentmethod' => $paymentmethod, 'ship' => $ship,'payment'=>$query3]);
    }
    public function editoder(Request $request)
    {
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            return redirect('/payment')->withErrors($validator)->withInput();
        } else {
            Session::flash('success', 'Chỉnh sửa đơn hàng thành công');
            $query = DB::table('payment')->where('idPayment',$request->idPayment)->update([
                'name' => $request->name,
                'city' => $request->city,
                'district' => $request->district,
                'ward' => $request->ward,
                'address' => $request->address,
                'note' => $request->note,
                'idShip' => $request->idShip,
                'idPaymentMethod' => $request->idPaymentMethod,
                'phone' => $request->phone,
                'update_at' => new DateTime(),
            ]);
        }
    }
    public function deleteoder(Request $request){
        $query = DB::table('cart')->where('idPayment',$request->idPayment)->delete();
        $query = DB::table('payment')->where('idPayment',$request->idPayment)->delete();
        return redirect('/oder');
    }
}
