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
        $tags =  Tags::select("name")
                        ->where("name","LIKE","%{$request->terms}%")
                        ->get();
        return response()->json($tags);
    }
}
