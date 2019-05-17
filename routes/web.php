<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculadora', function() {
   return 'soy una calculadora';
});

Route::get('/calculadora/{num}/{num2?}', function($numero, $numero2=0) {
    return 'la suma de los numero: '.($numero+$numero2);
 });

 Route::get('/calcu/{num}/{num2?}', function($nom, $nom2=0) {
    return 'la suma de los numero: '.($nom*$nom2);
 });

 Route::get('/operaciones', 'operaciones@llegar');

 Route::Resource('/basicas', 'basicas');