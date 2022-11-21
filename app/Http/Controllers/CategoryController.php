<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->new && $request->sale && $request->idCategory) {
            $productSearch['data'] = DB::table('product')->where('idCategory', $request->idCategory)->where('new', '>', 0)->Where('sale', '>', 0)->paginate(9);
            return view('template.component.result', $productSearch);
        } else if ($request->new && $request->sale) {
            $productSearch['data'] = DB::table('product')->where('new', '>', 0)->Where('sale', '>', 0)->paginate(9);
            return view('template.component.result', $productSearch);
        }
    }
    public function index1(Request $request)
    {
        $idCategory = $request->idCategory;
        $productSearch['data'] = DB::table('product')->Where('idCategory',$idCategory)->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index2(Request $request)
    {
        $idCategory = $request->idCategory;
        $productSearch['data'] = DB::table('product')->where('new','>',0)->Where('idCategory',$idCategory)->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index3(Request $request)
    {
        $idCategory = $request->idCategory;
        $productSearch['data'] = DB::table('product')->where('sale','>',0)->Where('idCategory',$idCategory)->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index4(Request $request)
    {
        $productSearch['data'] = DB::table('product')->where('sale','>',0)->where('new','>',0)->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
