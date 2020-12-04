<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\App_detail;
use App\Models\Tags;
use App\Models\Screenshot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $Discover = App_detail::where('status','public')->orderby('created_at','desc')->limit(2)->get();
        return view('dttb_content.index',['Discover'=>$Discover]);
        // print_r($Discover);
    }
    public function detail($id)
    {
        $Discover = App_detail::find($id);
        return view('dttb_content.detail',['Discover'=>$Discover]);
        // print_r($Discover);
    }
    public function admin()
    {
        return view('layout_admin');
    }

    
  
}
