<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function babyKid(){
        return view('product.baby-kid');
    }

    public function beautyHealth(){
        return view('product.beauty-health');
    }

    public function foodBeverage(){
        return view('product.food-beverage');
    }

    public function homeCare(){
        return view('product.home-care');
    }

    public function listProduct(){
        return view('product.listproduct');
    }
}
