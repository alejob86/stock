<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Obrassociales extends Eloquent
{
	/** 
     * Soft Delete
	 */
	//use SoftDeletingTrait;
    //protected $dates = ['deleted_at'];

	protected $table 	= 'obrassociales';
	protected $guarded 	= array('');

	// DEFINE RELATIONSHIPS --------------------------------------------------
    public function doctors() {
        return $this->hasMany('Doctors');
    }

	// DEFINE RELATIONSHIPS --------------------------------------------------
    public function obrassociales() {
        return $this->hasMany('Clients');
    }
}
?>