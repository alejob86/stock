<?php

class Profiles extends Eloquent
{
	
	Protected $table = 'profiles';
	protected $fillable = array('profile');
	

	public static function getSelectArray()
    {
    	$valueField = 'id';
    	$nameField  = 'profile';
    	$data		= Profile::All();
        $array 		= array();

        foreach ($data as $key) {
            $array[$key->$valueField] = $key->$nameField ;
        }
        return $array;
    }
}