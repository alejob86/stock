<?php

class InicioController extends BaseController
{

	protected $data = array();

	public function __construct()
	{
		$this->data['model'] 	= 'doctors';
		$this->data['modulo'] 	= 'Doctores Vieja';
		$this->data['seccion']	= '';
	}


}

?>