<?php

use Facade\FlareClient\View;
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

Route::get('/dashboard', function () {
    return view('dashboard.pages.home');
});
Route::get('/dashboard/login', function () {
    return view('dashboard.pages.login');
});

//website
Route::get('/wetaly', function () {
    return view('wetaly');
});


// Route::get('/', function () {
//     return view('front_end.pages.home');
// });

// Route::get('/' , function(){ return View('wetaly');});
// Route::get('/milk' , function(){ return View('milk');});

// //dashboard
// Route::get('/dashboard', function(){ return view('dashboardAdmin');} );

