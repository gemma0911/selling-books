<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index() {
        $productSearch = DB::table('product')->where('number','>',10)->paginate(9);
        return view('template.component.result',$productSearch);
    }
}
