<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\App_detail;
use App\Models\Tags;
use Illuminate\Support\Facades\Redirect;

class TagsController extends Controller
{
    //
    public function autocomplete(Request $request)
    {
        // $tags =  Tags::select("name")
        //                 ->where("name","LIKE","%{$request->terms}%")
        //                 ->get();
         // return response()->json($tags);
        $tags = Tags::all()->pluck('name')->toArray();
        return response($tags);
    
    }

     public function index()
    {
        $Tags = Tags::all();
        return view('admin.list_tags',['Tags'=>$Tags]);
    }

     public function addTags()
    {
        return view('admin.add_tags');
    }

    public function saveTags(Request $request)
    {
        $hidden =0;
        $status =0;

        $Tags = new Tags();
        $Tags -> name = $request->name;
        $Tags -> hidden = $hidden;
        $Tags -> save();

        return Redirect::to('/admin/tags');
    }

    public function deleteTags($id)
    {
        $Tags = Tags::find($id);
        $Tags -> delete(); 

        return Redirect::to('/admin/tags');
    }

    public function showTags($id)
    {
        // $category = category::where('id',$id)->get();
        $Tags = Tags::find($id);
        return view('admin.show_tags',['Tags'=>$Tags]);
        // print_r($category);
    }

     public function updateTags(Request $request)
    {
        $Tags = Tags::find($request->id);
        $Tags -> name = $request->name;
        $Tags -> save();

        return Redirect::to('/admin/tags');
    }


}
