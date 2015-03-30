<?php namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests;
use App\Categorie;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller {

	public function index(){
        $categorien= Categorie::get();

        return view('product.index', compact('categorien'));
    }

    public function showCategory($id){
    $producten= Product::where('Categorie', '=', $id)->get();
    return view('product.productlijst', compact('producten'));

        }
    public function showProduct($productid){
        $product= Product::where('id', '=', $productid)->get();
        return view('product.product', compact('product'));

    }

}
