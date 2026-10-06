<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home', ['current' => 'home'])->name('home');
Route::view('/about', 'pages.about', ['current' => 'about'])->name('about');
Route::view('/contact', 'pages.contact', ['current' => 'contact'])->name('contact');
Route::view('/ventures', 'pages.ventures', ['current' => 'ventures'])->name('ventures');
Route::view('/atnic', 'pages.atnic', ['current' => 'atnic'])->name('atnic');
Route::view('/deal4less', 'pages.deal4less', ['current' => 'deal4less'])->name('deal4less');
Route::view('/fitnass', 'pages.fitnass', ['current' => 'fitnass'])->name('fitnass');
