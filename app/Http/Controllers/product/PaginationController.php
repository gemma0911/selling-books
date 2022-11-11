<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\PaginationModel;
use Illuminate\Http\Request;

class PaginationController extends Controller
{

    public function index() {
        $pagination['data']=PaginationModel::paginate(2);
        return view('clients.product',$pagination);
    }
}
