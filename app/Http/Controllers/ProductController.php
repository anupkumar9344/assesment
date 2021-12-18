<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $req){

        $data =  Category::all();

        $product= new Product;
        $product->p_name=$req->p_name;
        $product->cat_id=$req->cat_id;
        $product->price=$req->price;
        $product->p_discription=$req->p_discription;
        // $category ->cat_image=$req->cat_image;
        if($req ->hasfile('p_image')){
            $file = $req->file("p_image");
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/products/', $filename);
            $product-> p_image = $filename;
        }else{
            return $req;
            $product->image = "";
        }
        
         
        $product ->save();
        // return view('admin.products', ['category'=>$data]);
        return redirect('products');

        // return redirect('products', ['category'=>$data]);

}

public function showproducts(){
    $data =  Product::all();
    return view('admin.products', ['products'=>$data]);
}
public function show(){
    $products =  Product::all();
    return view('home', ['products'=>$data]);
    // return view('home')->with($products);
}

public function deletep($id){
    $data2=Product::find($id);
    $data2->delete();
    return redirect('products');
}
}
