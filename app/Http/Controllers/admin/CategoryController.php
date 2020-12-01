<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $category = category::all();
        return view('admin.list_category',['category'=>$category]);
    }

     public function addCategory()
    {
        return view('admin.add_category');
    }

    public function saveCategory(Request $request)
    {
        $hidden =0;
        $status =0;

        $category = new Category();
        $category -> name = $request->name;
        $category -> image = $request->image;
        $category -> type = $request->type;
        $category -> hidden = $hidden;
        $category -> status = $status;
        $category -> save();

        return Redirect::to('/admin/category');
    }

    public function deleteCategory($id)
    {
        $category = category::find($id);
        $category -> delete(); 

        return Redirect::to('/admin/category');
    }

    public function showCategory($id)
    {
        // $category = category::where('id',$id)->get();
        $category = category::find($id);
        return view('admin.show_category',['category'=>$category]);
        // print_r($category);
    }

     public function updateCategory(Request $request)
    {
        $category = Category::find($request->id);
        $category -> name = $request->name;
        $category -> image = $request->image;
        $category -> type = $request->type;
        $category -> save();

        return Redirect::to('/admin/category');
    }
}
