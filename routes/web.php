<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//new and short method for routing
Route::view('/home','home');



//dynamic routing with dynamic URL
Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about',['name'=>$name]); //pass the name with the url
});


//redirecting the page with specific URL words
// Route::redirect('/home','./'); //when it is public/home, it will get redirected to public/


Route::get('user',[UserController::class,'getUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);