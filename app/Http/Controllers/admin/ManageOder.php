<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManageOder extends Controller
{
    //
    public function index(){
        $query = DB::table('payment')->get();
        return view('template.admin.oderManage',['product'=>$query]);
    }
}
