<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\Response;
class IndexController extends Controller
{
    //
    public function index() {
        $pagination['data']=PaginationModel::paginate(6);
        return view('template.index',$pagination);
    }
}
