<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/feedback', function (){
    return view('front.feedback',['articles' => \App\Article::all()]);
});

Route::get('/', function () {
    return view('front.index',['articles' => \App\Article::orderBy('price','DESC')->get()]);
});

Route::get('/about',function (){
    return view('front.about',['articles' => \App\Article::all()]);
});

Route::get('/service', function () {
    return view('front.services',['articles' => \App\Article::all()]);
});

Route::get('/contact',function (){
    return view('front.contact',['articles' => \App\Article::all()]);
});

Route::get('/single','MainController@single')->name('single');
Route::post('/subscribe','MainController@subscribe')->name('subscribe');
Route::get('delete/subs/{id}','ArticleController@delete');
//
//Route::get('create/feedback','FeedbackController@create')->name('create/feedback');
//Route::post('store/feedback','FeedbackController@store')->name('store/feedback');

Route::post('type','TypesController@store')->name('type');
Route::get('create/type','TypesController@index')->name('create/type');
Route::get('delete/type/{id}','TypesController@destroy');
Route::get('edit/type/{id}','TypesController@edit');
Route::any('update/type/{types}','TypesController@update');

Route::post('mail','MainController@mail')->name('mail');

Route::get('single/{id}','MainController@single');
Route::post('file','ArticleController@file')->name('file');
Route::get('create','ArticleController@create')->name('create');
Route::get('kartinka','ArticleController@image')->name('kartinka');

Route::post('contact','MainController@contact')->name('contact');

Route::post('store', 'ArticleController@store')->name('store');
Route::get('delete/{id}', 'ArticleController@destroy')->name('delete/{id}');
Route::get('edit/{id}', 'ArticleController@edit')->name('edit/{id}');
Route::any('update/{article}','ArticleController@update')->name('update');

Route::post('order/contact','MainController@goEmail')->name('order/contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/back', function ()
{
    return redirect('/home');
});


