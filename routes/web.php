<?php

use Illuminate\Support\Facades\Route;
use App\Models\Slider;
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

// dd($data);
Route::get('/', function () {
    $slids = Slider::where('active_from', '<', date("Y-m-d H:i:s"))->where('active_to', '>', date("Y-m-d H:i:s"))->get();
    return view('home',['slids'=>$slids]);
});
