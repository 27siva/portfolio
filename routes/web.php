<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestappController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;


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


Route::get('/',  function () {
    return view('welcome');
    // return '<h1>firstpage</h1>';
});
// Route::get('/home', function(){
//     // return '<h2>hello world</h2>';
//     return view('top.sample');
// });
// Route::get('/home/{year?}/{month?}', function($year,$month=10){
//     // return '<h2>hello world</h2>';
//     return "$year / $month";
// });
Route::get('/home/db/', [HomeController::class, 'useDB']);
Route::get('/home/{year?}/{month?}', [HomeController::class, 'index']);
Route::resource('rest', RestappController::class);
