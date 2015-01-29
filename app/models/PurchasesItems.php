<?php

class PurchasesItems extends Eloquent
{
	protected $table 	= 'purchases_items';
	protected $guarded 	= array('');

	public function Purchases()
	{
		return $this->belongsTo('Purchases');
	}

	public function Items()
	{
		return $this->belongsTo('Items');
	}
}

?>