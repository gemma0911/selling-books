<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->idCategory != null) {
            if ($request->new && $request->sale) {
                $category = $request->idCategory;
                $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
                    ->where('sale.numberSale', '>', 0)
                    ->where('product.new', '>', 0)
                    ->whereIn('idCategory', $category)
                    ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct')->paginate(9);
                return view('template.component.result', $productSearch);
            }
        }
    }
    public function index1(Request $request)
    {
        if ($request->idCategory != null) {
            $category = $request->idCategory;
            $productSearch['data'] = DB::table('product')->whereIn('idCategory', $category)->paginate(9);
            return view('template.component.result', $productSearch);
        }
    }
    public function index2(Request $request)
    {
        if ($request->idCategory != null) {
            $category = $request->idCategory;
            $productSearch['data'] = DB::table('product')->whereIn('idCategory', $category)->where('product.new', '>', 0)
                ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct')->paginate(9);
            return view('template.component.result', $productSearch);
        }
    }
    public function index3(Request $request)
    {
        if ($request->idCategory != null) {
            $category = $request->idCategory;
            $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
                ->where('sale.numberSale', '>', 0)->whereIn('idCategory', $category)
                ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct')->paginate(9);
            return view('template.component.result', $productSearch);
        }
    }
}
