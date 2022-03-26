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
    return view('welcome');
});

Route::get("/trangchu", function () {
    return view('blog');
});

Route::get('/dangnhap', function () {
    return view('login');
});
Route::get('/dangki', function () {
    return view('register');
});
Route::get('/gioithieu', function () {
    return view('introduce');
});
Route::get('/admin', function () {
    return "ban da truy cap vao trang nay";
})->middleware('new_token');

