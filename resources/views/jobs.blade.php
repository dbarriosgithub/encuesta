@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
         <!-- contenido aqui -->

        {!! Form::open(array('url' => '/', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'jobForm')) !!}
         <div id="success_message"></div>
         
         <div class="form-group">

            <div class="col-md-4">
              {!! Form::label('sede','Sede')!!}
              {!! Form::text('sede',null,["class" => "form-control","id"=>"sede-name","placeholder"=>"Nombre sede"])!!}
            </div>

            <div class="col-md-4">
               {!! Form::label('acividad','Actividad')!!}
               {!! Form::text('actiname',null,["class" => "form-control","id"=>"actividad-name","placeholder"=>"Nombre actividad"])!!}
            </div>
            <div class="col-md-4">
              {!! Form::label('responsable','Responsable')!!}
              {!! Form::text('responsable',null,["class" => "form-control","id"=>"responsable-name","placeholder"=>"Nombre responsable"])!!}
              {!! Form::hidden('con_idcorporation',null,["class"=>"form-control","id"=>"con_Idcorporation"])!!}
            </div>
    </div>

    <div class="form-group">
          <div class="col-md-4">
            {!! Form::button('Agregar', ['class' => 'btn btn-primary', 'id' => 'btn-form']) !!}
          </div>
        </div>

        {!! Form::close() !!}
   
      </div>
    </div>
@endsection


@section('scripts')
    {!! Html::script('js/ajax.js') !!}
@endsection
