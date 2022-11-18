<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaginationModel;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->new || $request->sale) {
            if ($request->new) {
                if ($request->sale) {
                    $productSearch['data'] = DB::table('product')->where('new', '>', 0)->orWhere('sale','>',0)->paginate(9);
                    return view('template.component.result', $productSearch);
                } else {
                    $productSearch['data'] = DB::table('product')->where('new', '>', 0)->paginate(9);
                    return view('template.component.result', $productSearch);
                }
            } else if ($request->sale) {
                $productSearch['data'] = DB::table('product')->where('sale', '>', 0)->paginate(9);
                return view('template.component.result', $productSearch);
            }
        } else {
            $pagination['data'] = PaginationModel::paginate(9);
            return view('template.component.result', $pagination);
        }
    }
}
