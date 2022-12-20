<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class ManageUser extends Controller
{
    //
    public function index(){
        $user['user'] = DB::table('users')->get();
        return view('template.admin.user',$user);
    }
    public function delete(Request $request){
        $delete = DB::table('users')->where('id',$request->id)->delete();
        return redirect('/admin/manage-user');
    }
    public function add(){
        return view('template.admin.adduser');
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
            'nameUser'=>$data['name'],
        ]);
    }

    public function addpost(Request $request)
    {
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        } else {
            if ($this->create($allRequest)) {
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('/admin/manage-user-add');
            } else {
                Session::flash('R-error', 'Đăng ký thành viên thất bại!');
                return redirect('/admin/manage-user-add');
            }
        }
    }
}
