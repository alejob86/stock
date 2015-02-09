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
		// Receive data

			$input 		= Input::all();

			$categories = Input::has('chk_category') ? Input::get('chk_category') : array();

			$up 		= new upload();
			
			//unset($input['chk_category']);

		// Create the objet

			$item 		= new Items();

		// Populate the objet

			// Input Data

				$item->code = $input['code'];
				$item->name = $input['name'];
				$item->description = $input['description'];
				$item->provider_id = $input['provider_id'];
				$item->cost_price  = $input['cost_price'];
				$item->sell_price  = $input['sell_price'];
				//$item->expiration_date = $input['expiration_date'];
				$item->stock           = $input['stock'];
				$item->image 		   = $input['image'];
				$item->rent_price_15_days = $input['rent_price_15_days'];
				$item->rent_price_45_days = $input['rent_price_45_days'];
				$item->total_weight		  = $input['total_weight'];
				//$item->maximum_weight	  = $input['maximum_weight'];
				$item->color 			  = $input['color'];
				$item->size 			  = $input['size'];
				//$item->dimensions 		  = $input['dimensions'];
				//$item->presentation 	  = $input['presentation'];

			// Input Categories

				$item->categories()->sync($categories);

			// Input Image

				$up 				= $up->up($input['image'] , $this->img_path);

				if( $up != false )
				{
					$input['image'] =  $this->img_path .$up;
				}


		// Save the object

			$item->save();
			
			return Redirect::to('item')->with('success','Registro Editado Correctamente');
	
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