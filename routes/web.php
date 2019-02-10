<?php

//utilizando parametros no rota
Route::get('/categoria/{id}', 'SiteController@categoria');
//parametro opcional
Route::get('/categoriaOp/{id?}', 'SiteController@categoriaOp');
Route::get('/contato', 'SiteController@contato');
Route::get('/', 'SiteController@index');

