<?php namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShopController extends Controller {

    public function index(){
        $categorien= Categorie::get();
        return view('shop.index', compact('categorien'));
    }

    public function about(){

        return view('shop.about');
    }



}
