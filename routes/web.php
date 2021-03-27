<?php

use Illuminate\Support\Facades\Route;

/* Route:: get('/',function(){
    return view('page/home');// le . ou le slash est identique
})->name('app_home');
*/

//ca c'est une maniere plus courte d'ecrire les routes tjrs php
Route::get('/',fn() => view('page.home'))->name('app_home');

Route::get('/about-us',function(){
    return view('page/about');
})->name('app_about');

Route::get('/help',function(){
    return view('page/help');
})->name('app_help'); 

/* 
//encore plus court ecriture laravel
Route::view('/about','page.about')->name('app_about');

Route::view('/help','page.help')->name('help'); */

