<?php

class ItemsCategories extends Eloquent
{
	protected $table = 'items_categories';
	protected $guarded = array("");

	public static function getCategoriesFromItemId($id)
    {
    	$result = array();
    	$datos = ItemsCategories::where('item_id','=',$id)->get();
    	
    	foreach($datos as $dato)
    	{
    		$result[$dato->category_id] = 1;    		        	
    	}

    	return $result;
    }

}

?>