<?php

class ObrassocialesController extends BaseController
{
	protected $data = array();

	public function __construct()
	{
		$this->data['ruta'] 		= 'obrassociales';
		$this->data['model'] 		= 'Obrassociales';
		$this->data['modulo'] 		= 'Obras sociales';
		$this->data['seccion']		= '';
	}
}