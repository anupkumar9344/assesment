<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CategoryController extends Controller
{
    public function addCategory(Request $req){

            $category = new Category;
            $category ->cat_name=$req->cat_name;
            $category ->cat_discription=$req->cat_discription;
            // $category ->cat_image=$req->cat_image;
            if($req ->hasfile('cat_image')){
                $file = $req->file("cat_image");
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file ->move('uploads/category/', $filename);
                $category->cat_image = $filename;
            }else{
                return $req;
                $category->image = "";
            }
            
             
            $category ->save();
            return redirect('category');
    
    }

    public function showcategory(){
        $data =  Category::all();
        return view('admin.category', ['category'=>$data]);
    }
    public function delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect('category');
    }
}
