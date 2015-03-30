<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller {

	public function index(){
        $categorien= DB::table('categorien')->get();

        return view('product.index', compact('categorien'));
    }

    public function showCategory($id){
    $producten= DB::table('categorie_has_producten')->join('producten','product_id','=','producten.id')->where('categorie_id', '=', $id)->get();
    return view('product.productlijst', compact('producten'));

        }
    public function showProduct($productid){
        $product= DB::table('producten')->where('id', '=', $productid)->get();
        return view('product.product', compact('product'));

    }

}
