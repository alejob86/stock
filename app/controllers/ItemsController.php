<?php

class ItemsController extends BaseController
{
	protected $data = array();

	public function __construct()
	{
		$this->data['ruta'] 		= 'items';
		$this->data['model'] 		= 'items';
		$this->data['modulo'] 		= 'Articulos';
		$this->data['seccion']		= '';
	}
}

?>