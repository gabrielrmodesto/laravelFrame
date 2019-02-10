<?php

Route::group(['namespace' => 'Site'], function(){
    //utilizando parametros no rota
    Route::get('/categoria/{id}', 'SiteController@categoria')->middleware('auth');
    //parametro opcional
    Route::get('/categoriaOp/{id?}', 'SiteController@categoriaOp');
    Route::get('/contato', 'SiteController@contato');
    Route::get('/', 'SiteController@index');
});

