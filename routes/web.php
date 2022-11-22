<?php

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

//    $types = \Illuminate\Support\Facades\Cache::remember('types',33600,function (){
//       return    \App\Models\CarType::all();
//    });
    return view('welcome');
});
Route::get('/get', function () {

//    $types = \Illuminate\Support\Facades\Cache::remember('types',33600,function (){
//        return   11;
//    });
//   dd($types);
//    return view('welcome');
});
