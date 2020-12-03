<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\App_detail;
use App\Models\Tags;
use App\Models\Screenshot;
use Illuminate\Support\Facades\Redirect;

class ScreenshotController extends Controller
{
    //
      public function index()
    {
        $Screenshot = Screenshot::all();
        return view('admin.list_screenshot',['screenshot'=>$Screenshot]);
    }

     public function addScreenshot()
    {
        $App_detail = App_detail::all();
        return view('admin.add_screenshot',['App_detail'=>$App_detail]);
    }

    public function saveScreenshot(Request $request)
    {
        $hidden =0;
        $status =0;

        $Screenshot = new Screenshot();
        $Screenshot -> link = $request->link;
         $Screenshot -> app_id = $request->app_id;
        $Screenshot -> hidden = $hidden;
        $Screenshot -> save();

        return Redirect::to('/admin/screenshot');
    }

    public function deleteScreenshot($id)
    {
        $Screenshot = Screenshot::find($id);
        $Screenshot -> delete(); 

        return Redirect::to('/admin/screenshot');
    }

    public function showScreenshot($id)
    {
       
        $App_detail = App_detail::all();
        $Screenshot = Screenshot::find($id);
        return view('admin.show_screenshot',['screenshot'=>$Screenshot,'App_detail'=>$App_detail]);
        // print_r($category);
    }

     public function updateScreenshot(Request $request)
    {
        $Screenshot = Screenshot::find($request->id);
         $Screenshot -> link = $request->link;
         $Screenshot -> app_id = $request->app_id;
        $Screenshot -> save();

        return Redirect::to('/admin/screenshot');
    }
}
