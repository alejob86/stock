<?php

class Purchases extends Eloquent
{
	protected $table	 = 'purchases';
	protected $guarded	 = array('');

	public function Providers()
	{
		return $this->belongsTo('Providers');
	}

	public function PurchasesItems()
	{
		return $this->hasMany('PurchasesItems');
	}

}

?>