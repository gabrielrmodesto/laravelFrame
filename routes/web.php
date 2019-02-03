<?php

Route::get('/contato', function(){
    return view('contato');
});
Route::get('/empresa', function(){
   return view('empresa');
});
Route::get('/', function () {
    return view('welcome');
});
