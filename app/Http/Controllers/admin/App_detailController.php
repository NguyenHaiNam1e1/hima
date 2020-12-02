<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\App_detail;
use App\Models\Tags;
use Illuminate\Support\Facades\Redirect;

class App_detailController extends Controller
{
    //
     public function index()
    {
        $app_detail = App_detail::all();
        return view('admin.list_app_detail',['app_detail'=>$app_detail]);
    }

     public function addApp_detail()
    {
     
        $category = Category::orderby('id','desc')->get();
        return view('admin.add_app_detail',['category'=>$category]);
        // print_r($tags);
       
    }

    public function saveApp_detail(Request $request)
    {
        $hidden =null;
        $userId =2;
       
        $app_detail = new App_detail();
        $app_detail -> packageName = $request->packageName;
        $app_detail -> appName = $request->appName;
        $app_detail -> type = $request->type;
        $app_detail -> icon = $request->icon;
        $app_detail -> shortDesc = $request->shortDesc;
        $app_detail -> desc = $request->desc;
        $app_detail -> screenshots = $request->screenshots;
        $app_detail -> banner = $request->banner;
        $app_detail -> rating = $request->rating;
        $app_detail -> desc = $request->desc;
        $app_detail -> developer = $request->developer;
        $app_detail -> version = $request->version;
        $app_detail -> tags = $request->tags;
        $app_detail -> size = $request->size;
        $app_detail -> fileApk = $request->fileApk;
        $app_detail -> categoryId = $request->categoryId;
        $app_detail -> hidden = $hidden;
        $app_detail -> userId = $userId;
        $app_detail -> status =$request->status;
        $app_detail -> error = $request->error;
        $app_detail -> packageNameIOS = $request->packageNameIOS;
        $app_detail -> os = $request->os;
        $app_detail -> save();

        return Redirect::to('/admin/app_detail');
    }

    public function deleteApp_detail($id)
    {
        $app_detail = App_detail::find($id);
        $app_detail -> delete(); 

        return Redirect::to('/admin/app_detail');
    }

    public function showApp_detail($id)
    {
        $category = Category::all();
        $app = App_detail::find($id);
        return view('admin.show_app_detail',['app'=>$app,'category'=>$category]);
       
    }

     public function updateApp_detail(Request $request)
    {

        $app_detail = App_detail::find($request->id);
        $app_detail -> packageName = $request->packageName;
        $app_detail -> appName = $request->appName;
        $app_detail -> type = $request->type;
        $app_detail -> icon = $request->icon;
        $app_detail -> shortDesc = $request->shortDesc;
        $app_detail -> desc = $request->desc;
        $app_detail -> screenshots = $request->screenshots;
        $app_detail -> banner = $request->banner;
        $app_detail -> rating = $request->rating;
        $app_detail -> desc = $request->desc;
        $app_detail -> developer = $request->developer;
        $app_detail -> version = $request->version;
        $app_detail -> tags = $request->tags;
        $app_detail -> size = $request->size;
        $app_detail -> fileApk = $request->fileApk;
        $app_detail -> categoryId = $request->categoryId;
        $app_detail -> status =$request->status;
        $app_detail -> error = $request->error;
        $app_detail -> packageNameIOS = $request->packageNameIOS;
        $app_detail -> os = $request->os;
        $app_detail -> save();

        return Redirect::to('/admin/app_detail');
    }
}
