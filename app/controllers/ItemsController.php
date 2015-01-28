<?php

class ItemsController extends BaseController
{
	protected $data 	 =  array();
	protected $img_path  =  'items/images/';

	public function __construct()
	{
		$this->data['ruta'] 		= 'items';
		$this->data['model'] 		= 'Items';
		$this->data['modulo'] 		= 'Articulos';
		$this->data['seccion']		= '';
	}

	public function postNew()
	{

		$input 		= Input::all();

		 if(isset($input['chk_category'])){
		 	$categories = $input['chk_category'];	
		 }

		unset($input['chk_category']);

		$up 		= Upload::up($input['image'] , $this->img_path);

		if( $up != false )
		{
			$input['image'] =  $this->img_path .$up;
		}

		$item = Items::Create($input);

		if($item)
		{
			if (isset($categories))
			{	
				foreach ( $categories as $category )
				{
					$itemsCategories 				= new ItemsCategories();
					$itemsCategories->item_id 		= $item->id;
					$itemsCategories->category_id 	= $category;
					$itemsCategories->save();	
				}
				return Redirect::back()->with('success','Registro Creado Correctamente');
			}
			else
			{
				return Redirect::back()->with('warning','Ocurrio un error asociando los items');
			}
					
		}
		else
		{
			return Redirect::back()->with('warning','Ocurrio un error creando el Registro');
		}	
	}


	//post edit
	public function postEdit($id = null)
	{	

		$input 		= Input::all();

		 if(isset($input['chk_category'])){
		 	$categories = $input['chk_category'];	
		 }

		unset($input['chk_category']);



		$model = $this->data['model'];
	 	$model = $model::find($id);

	 	$model->fill(Input::all());
	 	$model->save();
	 
	 	return Redirect::back();
	}

}

?>