<?php

class Permissions extends Eloquent
{
        protected $table = 'permissions';
        protected $guarded = array('');

        public static function getPermissionsFromProfileId($id)
        {
        	$result = array();
        	$datos = Permission::where('profile_id','=',$id)->get();
        	
        	foreach($datos as $dato)
        	{
        		$result[$dato->module_id] = array(
        							"read" => $dato->read,
        							"edit" => $dato->edit,
        							"delete" => $dato->delete,
        							"add" => $dato->add
        						);         		        		
        	}
        	return $result;
        }
}