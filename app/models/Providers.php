<?php

class Providers extends Eloquent
{
	protected $table 	= 'providers';
	protected $guarded 	= array('');

	public function Purchases()
	{
		return $this->hasMany('Purchases');
	}
}

?>