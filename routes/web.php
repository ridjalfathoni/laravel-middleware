<?php

use Illuminate\Support\Facades\Route;

//nanti dihapus
use Illuminate\Http\Request;

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
})->middleware('basic.auth');

Route::get('/login', function (Request $request) {
    // return function(Request $request) {
    //     $request->session()->put('user', 'leon');
    //     return view('welcome');
    // };
    
    $request->session()->put('user', 'leon');
    return view('welcome');
});