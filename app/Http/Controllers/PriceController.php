<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function index1(Request $request)
    {
        if($request->idCategory != null){
            $category = $request->idCategory;
            $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
            $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
            $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
                ->where('sale.numberSale', '>', 0)
                ->whereIn('idCategory',$category)
                ->where('product.new', '>', 0)
                ->whereBetween('product.price',[$start,$end])
                ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
            return view('template.component.result', $productSearch);
        }
    }
    public function index2(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')
        ->whereBetween('product.price',[$start,$end])
            ->where('product.new', '>', 0)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function index3(Request $request)
    {
        if($request->idCategory != null){
            $category = $request->idCategory;
            $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
            $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
            $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
                ->where('sale.numberSale', '>', 0)
                ->whereIn('product.idCategory',$category)
                ->whereBetween('product.price',[$start,$end])
                ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
            return view('template.component.result', $productSearch);
        }
    }
    public function index4(Request $request)
    {
        if($request->idCategory != null){
            $category = $request->idCategory;
            $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
            $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
            $productSearch['data'] = DB::table('product')
            ->whereIn('product.idCategory',$category)
                ->whereBetween('product.price',[$start,$end])
                ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
            return view('template.component.result', $productSearch);
        }
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

    public function index6(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')
            ->where('product.new', '>', 0)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }

    public function index7(Request $request)
    {
        $start = DB::table('price')->where('idPrice', $request->idPrice)->value('start');
        $end = DB::table('price')->where('idPrice', $request->idPrice)->value('end');
        $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
            ->where('sale.numberSale', '>', 0)
            ->whereBetween('product.price',[$start,$end])
            ->select('product.images', 'product.name', 'product.content', 'product.price', 'product.idProduct', 'product.idSale')->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
