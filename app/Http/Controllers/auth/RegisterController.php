<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function getRegister()
    {
        return view('template.client.register');
    }

    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'email' => 'required|string|email|max:255|unique:users',
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

    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'level' => '3',
        ]);
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
}
