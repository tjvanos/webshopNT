<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller {

    public function index(){
        $categorien= DB::table('categorien')->get();
        return view('shop.index', compact('categorien'));
    }

    public function about(){

        return view('shop.about');
    }
}
