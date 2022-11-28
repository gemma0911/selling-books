<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchProductController extends Controller
{
    //
    public function index(Request $request) {
        $productSearch['data'] = DB::table('product')
        ->where('product.name','like','%' . $request->content . '%')
        ->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
