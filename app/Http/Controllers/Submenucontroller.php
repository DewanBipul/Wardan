<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\submenu;
use Illuminate\Http\Request;
use carbon\Carbon;

class Submenucontroller extends Controller
{
    function submenu(Request $request){

        $menu = menu::all();
        $submenu_info = submenu::all();
        return view('menu.submenu', compact('menu','submenu_info'));
    }

    function addsubmenu(Request $request){
        submenu::insert([
            'menu_id'=>$request->menu_id,
            'submenu_name'=>$request->submenu_name,
            'created_at'=>carbon::now(),
        ]);
        return back()->with('submenu', 'your information successfully added');
    }

    function menu(Request $request){
        $menu_list = menu::all();
        $submenu_list = submenu::all();
        return view('frontend.index', compact('menu_list','submenu_list'));
    }

    function getsubmenu(Request $request){
        $submenu = submenu::where('menu_id', $request->menu_name)->get();
        $str_to_send  = "";
        foreach($submenu as $item){
            $str_to_send  .="<li><a>".$item->submenu_name."</a></li>";

        }

        echo $str_to_send;

    }


}
