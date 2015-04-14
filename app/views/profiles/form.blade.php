@extends('template-2.template')
@section('content')

<section  class="panel ">
    <header class="panel-heading">      
        <b>{{Str::upper($module)}}</b>
        <div class="btn-group pull-right">
            <a href="{{$module}}/new" class="btn  btn-xs"><span class="fa fa-plus-square"></span> Agregar</a>          
            <a href="{{$module}}"class="btn  btn-xs" type="button"><span class="fa fa-bars"></span> Listar</a>
        </div>          
    </header>
    <div class="panel-body">
        @if ($action == "create")
            {{ Form::open(array('url' => "$module/new", 'class' => 'form-horizontal')) }}    
        @else    
             {{ Form::model($model , array('class' => 'form-horizontal')) }}    
        @endif

<!--  
    {{ Form::label('label', 'nombre', array('class' => 'col-sm-2 control-label')) }}
    {{ Form::text ('nombre', Input::old('nombre'), array('class' => 'col-sm-2 control-label')) }}
    {{ Form::file ('file', $attributes = array()) }} 
    {{ Form::checkbox('name', 'value', true) }}
    {{ Form::radio('name', 'value', true) }}
    {{ Form::select('animal', array('Cats' => array('leopard' => 'Leopard'),'Dogs' => array('spaniel' => 'Spaniel'), ))}} 
-->    
            {{ Form::hidden('id', Input::old('id'), array('class'=>'form-control' )) }}

            {{ Form::text('profile', Input::old('profile'), array('class'=>'form-control' )) }}

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Modulo</th>
                        <th>Leer</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                        <th>Agregar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modules as $module)
                    <tr>
                        <td>{{ $module->name }}</td>
                        <td><input type="checkbox" name="read[{{$module->id}}]" value="1" <?php if(isset($permissions) && ($permissions["$module->id"]["read"] == 1) ){ echo 'checked' ;} ?> > </td>
                        <td><input type="checkbox" name="edit[{{$module->id}}]" value="1" <?php if(isset($permissions) && ($permissions["$module->id"]["edit"] == 1) ){ echo 'checked' ;} ?>  ></td>
                        <td><input type="checkbox" name="delete[{{$module->id}}]" value="1" <?php if(isset($permissions) && ($permissions["$module->id"]["delete"] == 1) ){ echo 'checked' ;} ?>  ></td>
                        <td><input type="checkbox" name="add[{{$module->id}}]" value="1" <?php if(isset($permissions) && ($permissions["$module->id"]["add"] == 1) ){ echo 'checked' ;} ?> ></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        <br>
            {{ Form::submit('Aceptar', array('class' => 'form-control btn btn-primary'))}}                    
            {{ Form::close() }}
    </div>
</section>
@stop