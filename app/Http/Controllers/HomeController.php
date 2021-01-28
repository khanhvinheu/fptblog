<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;

class HomeController extends Controller
{
    function index(){
        $data =  blogs::skip(0)->take(4)->get();
        return view('home',['data'=>$data]);
    }
}
