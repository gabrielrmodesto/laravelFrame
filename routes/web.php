<?php
//
////Rotas em grupo
//Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
//    Route::get('/grupo1', function(){
//        return 'Grupo 1';
//    });
//    Route::get('/grupo2', function(){
//        return 'Grupo 2';
//    });
//});
//Route::get('/login', function(){
//    return ("#form Login");
//});
////sem passar o parametro na url
//Route::get('/categoria2/{idCategoria?}', function($idCategoria=1){
//    return "Post da categoria {$idCategoria}";
//});
////passando o parametro na url
//Route::get('/categoria/{idCategoria}', function($idCategoria){
//    return "Post da categoria {$idCategoria}";
//});
////rota nomeada
//Route::get('/nome/nome2/nome3', function(){
//    return ('Rota nomeada');
//})->name('rota.nomeada');
//
//Route::get('/contato', function(){
//    return view('contato');
//});
//Route::get('/empresa', function(){
//   return view('empresa');
//});
Route::get('/', function () {
    return redirect()->route('rota.nomeada');
});
