<?php

class ClientsController extends BaseController
{
	protected $data = array();

	public function __construct()
	{
		$this->data['ruta'] 		= 'clients';
		$this->data['model'] 		= 'clients';
		$this->data['modulo'] 		= 'Clientes';
		$this->data['seccion']		= '';
	}
}