<?php
 
 class Upload 
{
	
	public function up($file = null ,$path = null)
	{

		if($file)
		{
			$date 	  =  new DateTime();	

			$filename =  $date->getTimestamp().".".$file->getClientOriginalExtension();

			$upload_success = $file->move($path , $filename);

			if( $upload_success ) {

				return $filename;
				//$novedad->imagen = $filename ;

			} else {

				return False;

			}	
		}

	}

	public function del($file = null, $path = null)
	{
		File::delete($path.$file);				
	}
}

 ?>