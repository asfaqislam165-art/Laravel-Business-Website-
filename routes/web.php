<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');


Route::get('/services',function (){
    return view('frontend.services');
})->name('servises');



Route::get('/projects',function (){
    return view('frontend.projects');
})->name('projects');


Route::get('/contact',function (){
    return view('frontend.contact');
})->name('contact');



Route::get('/blog',function (){
    return view('frontend.blog');
})->name('blog');