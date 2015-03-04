{{Form::texto('name','Nombre')}}
{{Form::texto('last_name','Apellido')}}
{{Form::texto('dni','DNI')}}
{{Form::texto('email','Email')}}
{{Form::texto('phone','Teléfono')}}
{{Form::texto('cell_phone','Celular')}}
{{Form::texto('company_name','Nombre de la Empresa')}}
{{Form::texto('cuit','CUIT')}}

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
                  {{ Form::file('image') }}
            </div>
        </div>
    </div>
</div>