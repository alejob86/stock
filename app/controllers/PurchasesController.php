<?php

class PurchasesController extends BaseController
{
	protected $data = array();

	public function __construct()
	{
		$this->data['ruta'] 		= 'purchases';
		$this->data['model'] 		= 'Purchases';
		$this->data['modulo'] 		= 'Compras';
		$this->data['seccion']		= '';
	}

	public function newPurchase()
	{
		$this->data['seccion']		= 'Nueva';
		
		return View::make('purchases.purchases_new')->with($this->data);
	}
}