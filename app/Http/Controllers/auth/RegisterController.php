<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    //
    public function getRegister(){
        return view('clients.register');
    }
    public function postRegister(Request $request){

        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $query = DB::table('user')->insert(
            [
                'email' => $request->get('email'),
                'password' =>bcrypt($request->get('password')),
                'level' => 1,
                'created_at' => new DateTime(),
            ]
        );
        return redirect()->to('/');
    }
}
