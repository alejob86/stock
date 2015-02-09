<?php

class Items extends Eloquent
{
	protected $table 	= 'items';
	protected $guarded 	= array('');

	public function PurchasesItems()
	{
		return $this->hasMany('PurchasesItems');
	}

	public function categories()
	{
		return $this->belongsToMany('Categories','items_categories','item_id','category_id');
	}
}
?>
