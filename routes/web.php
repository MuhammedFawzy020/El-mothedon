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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homeSectionCont', function () {
    return view('content.homeSectionCont');
});
Route::get('/about', function () {
    return view('content.about');
});
Route::get('/contact', function () {
    return view('content.contact');
});

Route::get('/vision', function () {
    return view('content.vision');
});
Route::get('/mission', function () {
    return view('content.mission');
});
Route::get('/media', function () {
    return view('content.media');
});
Route::get('/service', function () {
    return view('content.service');
});
Route::get('/proContent', function () {
    return view('content.proContent');
});

Route::get('/proDetails', function () {
    return view('content.proDetails');
});
Route::get('/faq', function () {
    return view('content.faq');
});