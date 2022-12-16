<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
