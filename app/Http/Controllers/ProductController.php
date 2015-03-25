<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller {

	public function index(){
        $producten= DB::table('producten')->get();
        dd($producten);
        return view('product.index', compact('producten'));
    }

}
