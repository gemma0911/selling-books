<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class SaleAndNewController extends Controller
{
    public function sale(Request $request)
    {
        $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
        ->where('sale.numberSale','>',0)
        ->select('product.images', 'product.name', 'product.content', 'product.price','product.idProduct')->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function new(Request $request)
    {
        $productSearch['data'] = DB::table('product')->where('new','>',0)->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function saleandnew(Request $request)
    {
        $productSearch['data'] = DB::table('product')->join('sale', 'sale.idSale', '=', 'product.idSale')
        ->where('sale.numberSale','>',0)->where('product.new','>',0)
        ->select('product.images', 'product.name', 'product.content', 'product.price','product.idProduct')
        ->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
