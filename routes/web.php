<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Submenucontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//menu



Route::get('/index', [Homecontroller::class, 'index']);
Route::post('/menu/add', [Homecontroller::class, 'addmenu']);
Route::get('/menu/delete/{menu_id}', [Homecontroller::class, 'menudelete']);



//sub menu
Route::get('/add/submenu', [Submenucontroller::class, 'submenu']);
Route::post('/add/submenu', [Submenucontroller::class, 'addsubmenu']);
Route::get('/frontend/index', [Submenucontroller::class, 'menu']);

Route::post('/getsubmenu', [Submenucontroller::class, 'getsubmenu']);
