<?php

namespace App\Http\Controllers;
use App\PRODUCT_TYPE;
use App\PRODUCTS;
use App\IMAGE;
use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    public function getIndex(){
        $product_new = PRODUCTS::orderby('create_at','desc')->skip(0)->take(5)->get(); 
        $product_promotion = DB::select('select * from PRODUCTS where promotion_date >= sysdate and rownum<6 order by promotion_date desc');
        return view('pages.home',compact('product_new','product_promotion'));
    }
    public function getProducts(){
        $product = PRODUCTS::paginate(15); 
        return view('pages.product',compact('product'));
    }
    public function getProductPage(Request $req){
        $product = PRODUCTS::where('product_id',$req->product_id)->first();
        $image = IMAGE::where('product_id',$req->product_id)->get();
        return view('pages.product-page',compact('product','image'));
    }
    public function getAbout(){
        return view('pages.about');
    }
    public function getCheckout(){
        return view('pages.checkout');
    }
    public function getMycart(){
        return view('pages.mycart');
    }
}
