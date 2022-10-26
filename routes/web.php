<?php

use App\Facades\Postcard;
use App\Facades\Postcard2;
use App\Service\PostcardService;
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


Route::get('/postcards', function(){
    $postcardService = new PostcardService('US', "4", "7");
    $postcardService->hello('The message for test', 'test@mail.com');
});


Route::get('/facades', function() {
    Postcard::hello('New message','abs');
});


Route::get('/facades2', function() {
    Postcard2::hello('New message','abs');
});

