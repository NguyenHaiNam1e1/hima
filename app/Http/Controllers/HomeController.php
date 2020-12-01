<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('dttb_content.index');
    }
    public function detail()
    {
        return view('dttb_content.detail');
    }
    public function admin()
    {
        return view('layout_admin');
    }
}
