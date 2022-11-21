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
            $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
            ->where('sale.idSale','>',0)->where('product.idCategory',$request->idCategory)->where('product.new','>',0)
            ->select('product.images', 'product.name', 'product.content', 'product.price','product.idProduct')->paginate(9);
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
        $productSearch['data'] = DB::table('product')->where('product.idCategory',$request->idCategory)->where('product.new','>',0)
        ->select('product.images', 'product.name', 'product.content', 'product.price','product.idProduct')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index3(Request $request)
    {
        $idCategory = $request->idCategory;
        $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
        ->where('sale.idSale','>',0)->where('product.idCategory',$request->idCategory)
        ->select('product.images', 'product.name', 'product.content', 'product.price','product.idProduct')->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
