<?php

class ItemsController extends BaseController
{
	protected $data = array();

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
		$categories = $input['chk_category'];

		unset($input['chk_category']);
		
		$up 		= new upload();
		$up 		= $up->up($input['image'] , 'public/items/images/');

		if( $up != false )
		{
			$input['image'] =  $up;
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
			}else
			{
				return Redirect::back()->with('warning','Ocurrio un error asociando los items');
			}
					
		}else{
			return Redirect::back()->with('warning','Ocurrio un error creando el Registro');
		}	
	}

}

?>