<?php

Route::get('/', function () {
    return view('welcome');
});
//categoria
Route::get('/categoria', 'categoriaController@index')->name('index');
Route::post('/categoria/guardar', 'categoriaController@store')->name('guardar');
Route::put('/categoria/actualizar', 'categoriaController@update')->name('actualizar');
Route::delete('/categoria/eliminar', 'categoriatroller@destroy')->name('eliminar');
//pelicula
Route::get('/pelicula', 'peliculaController@index')->name('index');
Route::post('/pelicula/guardar', 'peliculaController@store')->name('guardar');
Route::put('/pelicula/actualizar', 'peliculaController@update')->name('actualizar');
Route::delete('/pelicula/eliminar', 'peliculaController@destroy')->name('eliminar');

//cliente
Route::get('/cliente', 'clienteController@index')->name('index');
Route::post('/cliente/guardar', 'clienteController@store')->name('guardar');
Route::put('/cliente/actualizar', 'clienteController@update')->name('actualizar');
Route::delete('/cliente/eliminar', 'clienteController@destroy')->name('eliminar');

//pretamo_peli
Route::get('/prestamo_peli', 'prestamo_peliController@index')->name('index');
Route::post('/prestamo_peli/guardar', 'prestamo_peliController@store')->name('guardar');
Route::put('/prestamo_peli/actualizar', 'prestamo_peliController@update')->name('actualizar');
Route::delete('/prestamo_peli/eliminar', 'prestamo_peliController@destroy')->name('eliminar');










