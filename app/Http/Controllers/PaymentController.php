<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class PaymentController extends Controller
{
    //
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
            ],
            [
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email không quá 255 ký tự',
                    'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không đúng',
            ]
        );
    }

    public function postRegister(Request $request)
    {
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        } else {
            if ($this->create($allRequest)) {
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('/register');
            } else {
                Session::flash('R-error', 'Đăng ký thành viên thất bại!');
                return redirect('/register');
            }
        }
    }

    public function index()
    {
        $cart = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'cart.idProduct', 'product.price')->get();

        $query2 = DB::table('cart')->join('product', 'product.idProduct', '=', 'cart.idProduct')
            ->where('cart.idUser', session()->get('idUser'))
            ->select('cart.number', 'product.images', 'product.name', 'product.content', 'product.price')->get();
        $count = 0;
        foreach ($query2 as $product) {
            $count = $count + (($product->number) * ($product->price));
        }
        $paymentmethod = DB::table('paymentmethod')->get();
        $ship = DB::table('ship')->get();
        return view("template.payment", ['product' => $cart, 'total' => $count,'paymentmethod'=>$paymentmethod,'ship'=>$ship]);
    }
}
