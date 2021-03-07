<?php

use Illuminate\Support\Facades\Route;

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



Route::middleware(['auth'])->group(function(){
    Route::view('/dashboard/money_lending','admin.dashboardLending')->name('moneyLending');
    Route::view('/dashboard/products','admin.dashboardProduct')->name('products');
    Route::view('/dashboard/money_management','admin.dashboardManagement')->name('moneyManagement');
    Route::view('/customers','admin.customers')->name('customers');
    Route::view('/myProfile','admin.myProfile')->name('myProfile');
    Route::get('/logout','Admin\AdminController@logout')->name('logout');
});

Route::middleware(['admin'])->group(function () {
    Route::view('/','login')->name('login');
    Route::view('/listahan','landingPage');
});

Route::post('/listahan/login','Admin\AdminController@login')->name('login/admin');


