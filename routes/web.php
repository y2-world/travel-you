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
Route::get('/about', function () {
    return view('about');
});
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('countries', function () {
    return view('countries');
});
Route::get('categories', function () {
    return view('categories');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

Route::resource('/', 'TopController');
Route::resource('posts', 'PostController');
Route::resource('countries', 'CountryController');
Route::resource('categories', 'CategoryController');
Route::resource('users', 'UsersController');
Route::resource('comments', 'CommentController');
Route::resource('troubles', 'TroubleController');
Route::resource('questions', 'QuestionController');
Route::resource('answers', 'AnswerController');
Route::resource('trouble_comments', 'TroubleCommentController');

