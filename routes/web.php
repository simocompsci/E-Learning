<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/auth/Login' , function(){
    return view('AuthPages.Login');
})->name('Login');

Route::get('/auth/Register' , function(){
    return view('AuthPages.Register');
})->name('Register');

Route::get('/auth/RegisterSTD' , function(){
    return view('AuthPages.StudentReg');
})->name('StudentReg');

Route::get('/auth/RegisterTEACH' , function(){
    return view('AuthPages.TeacherReg');
})->name('TeacherReg');
