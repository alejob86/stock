	
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#1" aria-expanded="true" aria-controls="collapseOne">
         Datos Generales
        </a>
      </h4>
    </div>
    <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        {{Form::texto('code','Codigo')}}
        {{Form::texto('name','Nombre')}}
        {{Form::texto('description','Descripcion')}}
        {{Form::provider('provider_id','Proveedor')}}
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="false" aria-controls="collapseTwo">
        Rubros
        </a>
      </h4>
    </div>
    <div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">    
         {{ Form::categorias('categorias') }}    
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#3" aria-expanded="false" aria-controls="collapseThree">
          Costos
        </a>
      </h4>
    </div>
    <div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        {{ Form::number('cost_price','Precio de compra','0.01', '0') }}      
        {{ Form::number('sell_price','Precio de venta','0.01', '0') }} 
        {{ Form::number('rent_price_15_days','Precio de alquiler por 15 dias','0.01', '0') }} 
        {{ Form::number('rent_price_45_days','Precio de alquiler por 45 dias','0.01', '0') }}
      </div>
    </div>
  </div>
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="collapseThree">
          Especificaciones
        </a>
      </h4>
    </div>
    <div id="4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
            {{ Form::number('total_weight','Peso total en Kg','0.01', '0') }}  
            {{ Form::number('maximun_weight','Peso Maximo en Kg','0.01', '0') }}  
            {{ Form::texto('color','Color') }}
            {{ Form::texto('size','Tamaño') }}
            {{ Form::number('stock','Stock','1', '0') }}
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#5" aria-expanded="false" aria-controls="collapseThree">
          Imagenes
        </a>
      </h4>
    </div>
    <div id="5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
            {{ Form::file ('image') }}
      </div>
    </div>
  </div>
</div>

    
       
  
    
 