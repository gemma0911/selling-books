<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
    //
    public function index(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
