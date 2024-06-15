<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('teamo');
});

Route::get('/fotocas', function (){
    return view('fotocas');
})->name('fotos');

Route::get('/txt1', function (){
    return view('txt1');
})->name('txt1');

Route::get('/txt2', function (){
    return view('txt2');
})->name('txt2');

Route::get('/txt3', function (){
    return view('txt3');
})->name('txt3');

Route::get('/txt4', function (){
    return view('txt4');
})->name('txt4');

Route::get('/txt5', function (){
    return view('txt5');
})->name('txt5');

Route::get('/txt6', function (){
    return view('txt6');
})->name('txt6');

Route::get('/txt7', function (){
    return view('txt7');
})->name('txt7');

Route::get('/txt8', function (){
    return view('txt8');
})->name('txt8');

Route::get('/txt9', function (){
    return view('txt9');
})->name('txt9');

Route::get('/txt10', function (){
    return view('txt10');
})->name('txt10');

Route::get('/txt11', function (){
    return view('txt11');
})->name('txt11');

Route::get('/txt12', function (){
    return view('txt12');
})->name('txt12');