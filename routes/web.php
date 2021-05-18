<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index']); 
Route::get('/about',function(){
    echo "<h2>About Page</h2>";
});
Route::get('/contact',function(){
    echo "<h2>Contact Page</h2>";
});
// Route::get('/user/{name}',function($name="sdf"){
//     // return view('user',['name'=>'Vanh Leg','age'=>'18']);
//     echo "<h1>$name</h1>";
// });
Route::get('/user/{name?}', function ($name="bob") {
    echo "<h2>User name is $name</h2>";
}); 

