<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManageProduct extends Controller
{
    //
    public function index(){
        $product['product'] = DB::table('product')->join('category','product.idCategory','=','category.idcategory')->join('sale','product.idSale','=','sale.idSale')
        ->select('category.nameCategory','product.name','product.name',
        'product.idProduct','product.content','product.buy','product.number','product.images','product.Create_at','product.price'
        ,'sale.numberSale','product.Update_at')->get();
        return view('template.admin.product',$product);
    }
    public function delete(Request $request){
        $product = DB::table('product')->where('idProduct',$request->idProduct)->delete();
        return redirect('/admin/manage-product');
    }
    public function addproduct(){
        $category = DB::table('category')->get();
        $sale = DB::table('sale')->get();
        $detail = DB::table('productdetail')->get();
        return view('template.admin.addproduct',["category"=>$category,"sale"=>$sale,"productdetail"=>$detail]);
    }
    public function addproductpost(Request $request){
        $add = DB::table('product')->insert([
            'name' => $request->name,
            'content' => $request->content,
            'number' => $request->number,
            'idCategory' => $request->category,
            'images' => $request->images,
            'create_at' => new DateTime(),
            'idDetail' => $request->detail,
            'price' => $request->price,
            'idSale' => $request->sale,
        ]);
        return redirect('/admin/manage-product-add');
    }
}
