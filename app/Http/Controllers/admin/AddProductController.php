<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
class AddProductController extends Controller
{
    //
    public function index() {
        $category = DB::table('category')->get();
        $sale = DB::table('sale')->get();
        return view("template.admin.addproduct",['category'=>$category,'sale'=>$sale]);
    }
    public function addProduct(Request $request){
        $query = DB::table('product')->insert([
            'name' => $request->name,
            'content' => $request->content,
            'number' => $request->number,
            'price' => $request->price,
            'idCategory' => $request->category,
            'idSale' => $request->sale,
            'images' => $request->images,
            'Create_at' => new DateTime(),
        ]);
        return redirect("/admin/add");
    }
}
