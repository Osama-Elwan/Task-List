<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return 'Main Page';
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/hello',function(){
    return 'Hello';
})->name('hello');

Route::get('/hallo',function(){
    // return redirect('/hello');
    return redirect()->route('hello');
});
Route::get('/greet/{name}',function($name){
    return 'Hello ' .$name . '!';
});

Route::fallback(function(){
    return 'Still got somewhere';
}); //if anyone go to undefined route like kjsfjsdakfl :(

// GET
//POST
//PUT
//DELETE
