<?php

Route::get('/', 'BienvenidaController@index');

Route::get('home', 'InicioController@index');

Route::controllers([
	'validacion' => 'Validacion\ValidacionController',
	'validado/fotos' => 'FotoController',
	'validado/albumes' => 'AlbumController',
	'validado/usuario' => 'UsuarioController',
	'validado' => 'InicioController',
	'/' => 'BienvenidaController',
]);
