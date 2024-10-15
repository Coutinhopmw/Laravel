<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class,'index']);
Route::get('/include',[SiteController::class,'index2']);
Route::get('/components',[SiteController::class,'components']);