<?php

class DoctorsController extends BaseController
{
	protected $data = array();

	public function __construct()
	{
		$this->data['ruta'] 		= 'doctors';
		$this->data['model'] 		= 'doctors';
		$this->data['modulo'] 		= 'Doctores';
		$this->data['seccion']		= '';
	}
}

?>