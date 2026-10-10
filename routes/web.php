<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home', ['current' => 'home'])->name('home');
Route::view('/about', 'pages.about', ['current' => 'about'])->name('about');
Route::view('/contact', 'pages.contact', ['current' => 'contact'])->name('contact');
Route::view('/ventures', 'pages.ventures', ['current' => 'ventures'])->name('ventures');
Route::view('/aetnic', 'pages.atnic', ['current' => 'atnic'])->name('atnic');
Route::redirect('/atnic', '/aetnic', 301);
Route::view('/deal4less', 'pages.deal4less', ['current' => 'deal4less'])->name('deal4less');
Route::view('/fitnass', 'pages.fitnass', ['current' => 'fitnass'])->name('fitnass');
