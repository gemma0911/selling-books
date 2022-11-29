<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class PaymentController extends Controller
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

    public function payment(Request $request)
    {
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            return redirect('/payment')->withErrors($validator)->withInput();
        } else {
            Session::flash('success', 'Đặt hàng thành công vui lòng chờ duyệt');
            $query = DB::table('payment')->insert([
                'name' => $request->name,
                'city' => $request->city,
                'district' => $request->district,
                'ward' => $request->ward,
                'address' => $request->address,
                'note' => $request->note,
                'idShip' => $request->idShip,
                'idPaymentMethod' => $request->idPaymentMethod,
                'phone' => $request->phone,
                'idUser' => session()->get('idUser'),
                'create_at' => new DateTime(),
                'status' => 1,
            ]);
            $query1 = DB::table('payment')->where('name',$request->name)->get();
           foreach($query1 as $query1){
            $query2 = DB::table('cart')->where('idPayment',0)
            ->where('idUser',session()->get('idUser'))
            ->update(['idPayment' => $query1->idPayment]);
           }
        }
    }

    public function index()
    {
        $cart = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))->where('idPayment',0)
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'cart.idProduct', 'product.price')->get();

        $query2 = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))->where('idPayment',0)
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'product.price')
            ->get();
        $count = 0;
        foreach ($query2 as $product) {
            $count = $count + (($product->number) * ($product->price));
        }
        $paymentmethod = DB::table('paymentmethod')->get();
        $ship = DB::table('ship')->get();
        return view("template.payment", ['product' => $cart, 'total' => $count,'paymentmethod'=>$paymentmethod,'ship'=>$ship]);
    }
}
