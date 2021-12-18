<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ForntendController extends Controller
{
    public function allcategory(){
        $data =  Category::all();
        return view('home', ['category'=>$data]);
    }
    public function allproduct(){
        $data =  Product::all();
        return view('view_product', ['products'=>$data]);
    }

}
