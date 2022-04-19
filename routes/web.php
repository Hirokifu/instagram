<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Mail\NewUserWelcomeMail;


// Route::get('/', function () {
//     return view('welcome');
// });

//メール認証
Auth::routes(['verify'=>true]);

// homeを追加 @2021/11/19
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{post}', 'PostsController@show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
