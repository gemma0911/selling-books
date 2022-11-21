<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class SaleAndNewController extends Controller
{
    public function sale(Request $request)
    {
        $productSearch['data'] = DB::table('product')->where('sale','>',0)->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function new(Request $request)
    {
        $productSearch['data'] = DB::table('product')->where('new','>',0)->paginate(9);
        return view('template.component.result', $productSearch);
    }
    public function saleandnew(Request $request)
    {
        $productSearch['data'] = DB::table('product')->where('sale','>',0)->where('new','>',0)->paginate(9);
        return view('template.component.result', $productSearch);
    }
}
