<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',  function () {
    $message = ['message' => 'Benvenuto!'];
    $links = ['documentation','info','questions'];
    ;
   return view('home', $message, ['links'=> $links] );
})->name('home');

Route::get('/subpage/documentation',  function () {;
  return view('subpage.documentation');
})->name('documentation');

Route::get('/subpage/info',  function () {;
  return view('subpage.info');
})->name('info');

Route::get('/subpage/questions',  function () {;
  return view('subpage.questions');
})->name('questions');

