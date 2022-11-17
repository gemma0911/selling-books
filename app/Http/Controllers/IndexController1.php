<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;

class IndexController1 extends Controller
{
    //
    // public function index(Request $request) {
    //     $pagination['data']=PaginatisonModel::paginate(6);
    //     return view('template.component.result',$pagination);
    // }
    public function index(Request $request){
        $pagination['data']=PaginationModel::paginate(6);
        return view('template.component.result',$pagination);
    }
}
