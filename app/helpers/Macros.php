<?php
    
    Form::macro('provider', function($name, $label)
        {
            $prov = providers::lists('name','id');
            $input = Form::select($name , $prov ,null, array('class'=>'form-control')); 

            return buildInput($input,$label);  
        });



 	Form::macro('date', function($name)
        {
            $value = Form::getValueAttribute($name);

            return '<input type="text" class="datepicker " name="'.$name.'" placeholder="mm/dd/yyyy" value="'.$value.'">';
        });

    Form::macro('areas', function($name)
        {
            $areas = Area::lists('area','id');
            return Form::select($name,$areas,array('class'=>'form-control')); 
        });

    Form::macro('edit', function($name)
        {
            $value = Form::getValueAttribute($name);
            return '<div class="form-control">
                        <textarea  name="'.$name.'" >'.$value.'</textarea>
                    </div>';
        });

    Form::macro('texto', function($name, $label)
        {    
            $value = Form::getValueAttribute($name);
            $input = '<input class="form-control" name="'.$name.'" value='.$value.'>';
    
            return buildInput($input,$label);         
          	
        });



//armamos el div con el label y el input

function buildInput($input, $label)
{
	$input = '		<div class="row">
					<div class="col-xs-12">
						<label class="control-label">'.$label.'</label>
					</div>
					<div class="col-xs-12">
						'.$input.'
					</div>
					</div>';

	return $input;
}
?>