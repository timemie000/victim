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
comment clone
*/

Route::get('/', function () {
    $title="what's up!!!";
    $content="Black Star !!";
    return view('welcome')->with([
        'title'=>$title,
        'content'=>$content
        ]);
})->name('home');
Route::get('/contact', function () {
    $title="ข้อมูลติดต่อเรา";
    $content="We are the Champion";
    return view('contact')->with([
        'title'=>$title,
        'content'=>$content
        ]);
    })->name('contact')->middleware('auth');
Route::get('/about', function () {
    $title="เกี่ยวกับเรา";
    $content="Fuck you all!!";
    return view('about')->with([
        'title'=>$title,
        'content'=>$content
        ]);
    })->name('about')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
