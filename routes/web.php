<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

// Root route: address http://127.0.0.1:8003
Route::get('/', function () {echo 'hello';});

// CRUD
Route::group(['prefix'=>'home'], function(){
    Route::any('/form', [CRUDController::class,'showForm']);
    Route::any('/add', [CRUDController::class,'add']);
    Route::any('/search', [CRUDController::class,'search']);
    Route::any('/update', [CRUDController::class,'update']);
    Route::any('/delete', [CRUDController::class,'delete']);
 
    // show all date existed in database
    Route::get('/page', [CRUDController::class,'page']);
});


