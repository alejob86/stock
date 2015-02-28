<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Doctors extends Eloquent
{
	/** 
     * Soft Delete
	 */
	//use SoftDeletingTrait;
    //protected $dates = ['deleted_at'];

	protected $table 	= 'doctors';
	protected $guarded 	= array('');

	// DEFINE RELATIONSHIPS --------------------------------------------------
    // each Doctor HAS one Obra social 
    public function obrassociales() {
        return $this->belongsTo('Obrassociales'); // this matches the Eloquent model
    }
}
?>