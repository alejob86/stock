<?php
	//obras
	
	Route::get('obrassociales/{model?}/{search?}', 	array('as' => 'obrassociales', 				'uses'  => 'ObrassocialesController@getIndex'));
	Route::get('obrassociales_nuevo', 				array('as' => 'obrassociales_new_form', 	'uses'  => 'ObrassocialesController@formModal'));
	Route::get('obrassociales_editar/{id?}', 		array('as' => 'obrassociales_edit_form',	'uses'	=> 'ObrassocialesController@formModal'));
	Route::get('obrassociales_borrar/{id?}', 		array('as' => 'obrassociales_delete',		'uses'	=> 'ObrassocialesController@getDel'));

	Route::post('obrassociales_nuevo', 				array('as' => 'obrassociales_post_new', 	'uses' 	=> 'ObrassocialesController@postNew'));
	Route::post('obrassociales_editar/{id?}', 		array('as' => 'obrassociales_post_edit', 	'uses' 	=> 'ObrassocialesController@postEdit'));
