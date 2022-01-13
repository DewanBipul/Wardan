<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Homecontroller extends Controller
{
    function index(Request $request){
        $menu_name = menu::all();
        return view('menu.index', compact('menu_name'));
    }

    function addmenu(Request $request){
        menu::insert([
            'menu_name'=>$request->menu_name,
            'created_at'=>carbon::now(),
        ]);
        return back()->with('menu', 'munu added successfully');
    }

    function menudelete($menu_id){
        menu::find($menu_id)->delete();
    return back();
    }

}
