<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index(Request $request)
    {
        $price['price'] = DB::table('price')->select('idPrice','end','start')->get();
        $pagination['data'] = PaginationModel::paginate(9);
        return view('template.index', $pagination, $price);
    }
}
