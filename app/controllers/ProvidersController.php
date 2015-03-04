<?php

class ProvidersController extends BaseController
{
	protected $data = array();
	protected $img_path  =  "assets/providers/images/";

	public function __construct()
	{
		// Route for the routes file
		$this->data['ruta'] 		= 'providers';
		
		// Model Name
		$this->data['model'] 		= 'Providers';

		// Module that appears at the view
		$this->data['modulo'] 		= 'Proveedores';
		
		// Variable that tells where to go according to the function, edit, new, delete
		$this->data['seccion']		= '';
	}
	
	//post nuevo
	public function postNew()
	{	
		$model = $this->data['model'];
	 	$model = $model::create(Input::all());
		$input = Input::all();
		$up    = new upload();
		
		// Input Image
		if(isset($input['image']))
		{
			$up			= $up->up($input['image'] , $this->img_path);

			if( $up != false )
			{
				$input['image'] =  $this->img_path.$up;
				$model->image    =  $input['image'];
			}else
			{
				$model->image    =  "";
			}
		}
		
		$model->save();

	 	return Redirect::back();
	}
	
	//post edit
	public function postEdit($id = null)
	{	
		$model = $this->data['model'];
	 	$model = $model::find($id);
		$input = Input::all();
		$up    = new upload();
	 	$model->fill(Input::all());
	 	
		
		// Input Image
		if(isset($input['image']))
		{
			$up			= $up->up($input['image'] , $this->img_path);

			if( $up != false )
			{
				$input['image'] =  $this->img_path.$up;
				$model->image    =  $input['image'];
			}else
			{
				$model->image    =  "";
			}
		}
		
		$model->save();
		
	 	return Redirect::back();
	}
	
}