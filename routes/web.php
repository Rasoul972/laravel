<?php

use App\Image;
use App\Mail\WelcomeToUser;
use App\Product;
use App\Role;
use App\Tag;
use App\Video;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;

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

Auth::routes(["verify" => true]);

Route::get("clear", function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
});

Route::get("send_email", function () {
    $userEmail = "user_email@gmail.com";
    $info = ["name" => "john", "city" => "vegas", "user_id" => 12];
    Mail::to($userEmail)->send(new WelcomeToUser($info));
});

Route::get("/posts", function () {

});

Route::get('/home', 'HomeController@index')->name('home');

//new changes on routes



