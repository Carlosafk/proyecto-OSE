<?php

Route::get('/', function () {
    return view('auth/login'); 
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/OSE Gestor de convenios/Home', 'vistahomeController');

Route::resource('/OSE Gestor de convenios/RegistroAdministrador', 'registrousuarioController');

Route::resource('/OSE Gestor de convenios/RegistroConvenio', 'registroconvenioController');
//Route::post('/OSE Gestor de convenios/RegistroConvenio', 'registroconvenioController@Documento')->name('subir');


Route::resource('/OSE Gestor de convenios/ListaConvenio', 'listaconveniosController');

Route::resource('/OSE Gestor de convenios/ActualizarConvenio', 'actualizarconvenioController');

//Route::resource('/OSE Gestor de convenios/ElinimarConvenio', 'eliminarconveniosController');

Route::resource('/OSE Gestor de convenios/ListaAdministradores', 'listaadminController');
Route::resource('/alerta', 'AlertaController');

Route::get('OSE Gestor de convenios/Exportar','listaconveniosController@Exportar')->name('GenerarDoc');

Route::resource('/OSE Gestor de convenios/ListaDeEmpresas','listaEmpresaController');

Route::get('/OSE Gestor de convenios/ConveniosporTerminar','vistahomeController@cvnTerminar')->name('cnvterminar');
//ruta del buscador en tiempo real
//Route::get('/OSEGestordeconvenios/Buscar','listaconveniosController@buscar');

Route::get('/OSEGestordeconvenios/BuscarConvenios','listaconveniosController@buscar');

Route::get('/OSEGestordeconvenios/BuscarEmpresas','listaEmpresaController@buscarEmp');

