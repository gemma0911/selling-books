<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    //
    public function index()
    {
    }
    public $data = [];
    public function getAuthLogin()
    {
        return view('clients.login');
    }
    public function postAuthLogin(Request $request)
    {
        $value = Session::put('name', 'value');
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if(auth()->attempt($user_data))
        {
            return view('clients.index');
        }else{
            return redirect()->route('login.get')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}
