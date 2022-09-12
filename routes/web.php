<?php

use App\Controllers\MainController;
use Framework\Route;


Route::get('/',[MainController::class,'index']);
Route::get('/test-1',[MainController::class,'test1']);
Route::get('/test-2',[MainController::class,'test2']);
Route::get('/test-3',[MainController::class,'test3']);
Route::get('/test-4',[MainController::class,'test4']);
Route::get('/test-5',[MainController::class,'test5']);
Route::get('/test-6',[MainController::class,'test6']);
Route::get('/test-7',[MainController::class,'show_test7']);
Route::post('/write',[MainController::class,'write']);




$REQUEST_URI = explode('?', $_SERVER['REQUEST_URI'])[0];
if(!in_array($REQUEST_URI, Route::$routes)){
    echo '<h1>Страница не существует</h1>';
}
