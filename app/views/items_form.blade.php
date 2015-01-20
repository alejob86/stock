		
	{{Form::texto('code','Codigo')}}
	{{Form::texto('name','Nombre')}}
	{{Form::texto('description','Descripcion')}}
	{{Form::provider('provider_id','Proveedor')}}

    {{ Form::label('label', 'Rubro', array('class' => 'control-label')) }} 
         
    {{ Form::categorias('categorias') }}           
  
    {{ Form::number('cost_price','Precio de compra','0.01') }}      
    {{ Form::number('sell_price','Precio de venta','0.01') }} 
    {{ Form::number('rent_price_15_days','Precio de alquiler por 15 dias','0.01') }} 
    {{ Form::number('rent_price_45_days','Precio de alquiler por 45 dias','0.01') }}
    {{ Form::number('total_weight','Peso total en Kg','0.01') }}  
    {{ Form::number('maximun_weight','Peso Maximo en Kg','0.01') }}  
    {{ Form::texto('color','Color') }}
    {{ Form::texto('size','Tamaño') }}
    {{ Form::number('stock','Stock','1') }}

    {{ Form::label('label', 'Imagen', array('class' => 'control-label')) }}  
    {{ Form::file ('image') }}
