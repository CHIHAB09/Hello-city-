<?php

use Illuminate\Support\Facades\Route;

Route:: get('/',function(){
    return view('page/home');// le . ou le slash est identique
});

Route:: get('/about-us',function(){
    return view('page/about');
});