<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Clients extends Eloquent
{
	/** 
     * Soft Delete
	 */
	//use SoftDeletingTrait;
    //protected $dates = ['deleted_at'];

	protected $table	 = 'clients';
	protected $guarded	 = array('');
	
	// DEFINE RELATIONSHIPS --------------------------------------------------
    // each Doctor HAS one Obra social 
    public function obrassociales() {
        return $this->belongsTo('Obrassociales'); // this matches the Eloquent model
    }
}

?>