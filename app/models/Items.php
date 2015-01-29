<?php

class Items extends Eloquent
{
	protected $table 	= 'items';
	protected $guarded 	= array('');

	public function PurchasesItems()
	{
		return $this->hasMany('PurchasesItems');
	}
}
?>
