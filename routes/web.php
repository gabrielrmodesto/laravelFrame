<?php

Route::get('/empresa', function(){
   return view('empresa');
});
Route::get('/', function () {
    return view('welcome');
});
