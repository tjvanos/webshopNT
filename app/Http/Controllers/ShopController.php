<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShopController extends Controller {

    public function index(){



        return view('shop.index');
    }

    public function about(){

        return view('shop.about');
    }
}
