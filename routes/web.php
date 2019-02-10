<?php

//utilizando parametros no rota
Route::get('/categoria/{id}', 'SiteController@categoria');
Route::get('/contato', 'SiteController@contato');
Route::get('/', 'SiteController@index');

