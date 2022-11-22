<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function index1(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
            ->where('sale.numberSale', '>', 0)
            ->where('product.idCategory', $request->idCategory)
            ->where('product.new', '>', 0)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index2(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')
            ->where('product.idCategory', $request->idCategory)
            ->where('product.new', '>', 0)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index3(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
            ->where('sale.numberSale', '>', 0)
            ->where('product.idCategory', $request->idCategory)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index4(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')
            ->where('product.idCategory', $request->idCategory)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index5(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
