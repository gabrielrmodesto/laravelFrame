<?php

Route::get('/categoria/{idCategoria}', function($idCategoria){
    return "Post da categoria {$idCategoria}";
});


Route::get('/categoria/{idCategoria}', function($idCategoria){
    return "Post da categoria {$idCategoria}";
});

Route::get('/nome/nome2/nome3', function(){
    return ('Rota nomeada');
})->name('rota.nomeada');

Route::get('/contato', function(){
    return view('contato');
});
Route::get('/empresa', function(){
   return view('empresa');
});
Route::get('/', function () {
    return redirect()->route('rota.nomeada');
});
