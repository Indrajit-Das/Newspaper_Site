<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Navtitle;

class NavController extends Controller
{
    //
    public function home(){
        return view('demo');
    }
    public function nav_items(){

        $nav = Navtitle::get();
        return response()->json($nav);
    }

}
