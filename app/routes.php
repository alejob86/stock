<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|I
*/

Route::get('update',function()
{

	return 	DBupdate::getUpdate();

});


Route::get('/', function()
{
	return View::make('index');
});

Route::post('buscar/', function(){
	$input 	= Input::all();
	$model  = $input['model'];
	//$search = $model::where('name','like','%'.$input['buscar'].'%')->get();
	$search = $input['buscar'];

	return Redirect::route($input['model'],array($model,$search));

});
/*
Route::get('articulos', array('as' => 'items', 'uses'=>'InicioController@getIndex'));
Route::get('item_nuevo', 		array('as' => 'new_form_item','uses'	=>'InicioController@formModal'));
Route::get('item_edit/{id?}', 	array('as' => 'edit_form_item','uses'	=>'InicioController@formModal'));
Route::get('item_del/{id?}', 	array('as' => 'del_item','uses'			=>'InicioController@getDel'));

Route::post('new_item', 		array('as' => 'post_new_item', 'uses' 	=> 'InicioController@postNew'));
Route::post('edit_item/{id?}', 	array('as' => 'post_edit_item', 'uses' 	=> 'InicioController@postEdit'));
*/

//items

Route::get('articulos/{model?}/{search?}',array('as' => 'items', 'uses'=>'ItemsController@getIndex'));
Route::get('articulos_nuevo', 			array('as' => 'items_new_form', 'uses'=>'ItemsController@formModal'));
Route::get('articulos_editar/{id?}', 	array('as' => 'items_edit_form','uses'	=>'ItemsController@formModal'));
Route::get('articulos_borrar/{id?}', 	array('as' => 'items_delete','uses'	=>'ItemsController@getDel'));

Route::post('articulos_nuevo', 			array('as' => 'items_post_new', 'uses' 	=> 'ItemsController@postNew'));
Route::post('articulos_editar/{id?}', 	array('as' => 'items_post_edit', 'uses' 	=> 'ItemsController@postEdit'));


//doctors
Route::get('doctores/{model?}/{search?}', array('as' => 'doctors', 'uses'=>'DoctorsController@getIndex'));
Route::get('doctores_nuevo', 			array('as' => 'doctors_new_form', 'uses'=>'DoctorsController@formModal'));
Route::get('doctores_editar/{id?}', 	array('as' => 'doctors_edit_form','uses'	=>'DoctorsController@formModal'));
Route::get('doctores_borrar/{id?}', 	array('as' => 'doctors_delete','uses'	=>'DoctorsController@getDel'));

Route::post('doctores_nuevo', 			array('as' => 'doctors_post_new', 'uses' 	=> 'DoctorsController@postNew'));
Route::post('doctores_editar/{id?}', 	array('as' => 'doctors_post_edit', 'uses' 	=> 'DoctorsController@postEdit'));


//clients
Route::get('clientes/{model?}/{search?}', array('as' => 'clients', 'uses'=>'ClientsController@getIndex'));
Route::get('clientes_nuevo', 			array('as' => 'clients_new_form', 'uses'=>'ClientsController@formModal'));
Route::get('clientes_editar/{id?}', 	array('as' => 'clients_edit_form','uses'	=>'ClientsController@formModal'));
Route::get('clientes_borrar/{id?}', 	array('as' => 'clients_delete','uses'	=>'ClientsController@getDel'));

Route::post('clientes_nuevo', 			array('as' => 'clients_post_new', 'uses' 	=> 'ClientsController@postNew'));
Route::post('clientes_editar/{id?}', 	array('as' => 'clients_post_edit', 'uses' 	=> 'ClientsController@postEdit'));





