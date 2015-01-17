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




Route::get('/', function()
{
	return View::make('index');
});


//items
Route::get('base', 				array('as' => 'base', 'uses'		 	=>'InicioController@parent::getIndex'));
Route::get('item_nuevo', 		array('as' => 'new_form_item','uses'	=>'InicioController@formModal'));
Route::get('item_edit/{id?}', 	array('as' => 'edit_form_item','uses'	=>'InicioController@formModal'));
Route::get('item_del/{id?}', 	array('as' => 'del_item','uses'			=>'InicioController@getDel'));

Route::post('new_item', 		array('as' => 'post_new_item', 'uses' 	=> 'InicioController@postNew'));
Route::post('edit_item/{id?}', 	array('as' => 'post_edit_item', 'uses' 	=> 'InicioController@postEdit'));




