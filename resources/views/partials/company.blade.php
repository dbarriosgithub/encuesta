<div class="row">
  	<div class="col-md-10 col-md-offset-1">
  	   <div class="panel panel-default">
        <div class="panel-body">
  	    

          {!! Form::open(array('url' => '/corporation', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'companyForm')) !!}
    	   <div class="form-group">
             <div class="col-md-6">
                {!! Form::label('Fecha_ini','Fecha inicio')!!}
    	          {!! Form::date('fecha_inicio',null,["class" => "form-control","id"=>"fecha_inicio","placeholder"=>"Fecha inicio"])!!}
             </div>
            <div class="col-md-6">
                {!! Form::label('Fecha_fin','Fecha finalizacion')!!}
                {!! Form::date('fecha_finalizacion',null,["class" => "form-control","id"=>"fecha_finalizacion","placeholder"=>"Fecha inicio"])!!}
            </div>
            <div class="col-md-6">
                {!! Form::label('responsable','Responsable')!!}
                {!! Form::text('responsable_name',null,["class" => "form-control","id"=>"responsable","placeholder"=>"Nombre responsable"])!!}
            </div>
            <div class="col-md-6">
                {!! Form::label('por_avance','% avance')!!}
                {!! Form::text('por_avance',null,["class" => "form-control","id"=>"por_avance","placeholder"=>" % avance"])!!}
            </div>
            <div class="col-md-6">
                {!! Form::label('obj_generales','Objetivos generales')!!}
                {!! Form::text('objetivos',null,["class" => "form-control","id"=>"obj_generales","placeholder"=>"Objetivos generales del SGSST"])!!}
            </div>
    	   </div>
         <div class="col-md-6">
            {!! Form::file('firma')!!}
         </div>
      {!! Form::button('Guardar', ['class' => 'btn btn-primary', 'id' => 'btnguardarcompany'])!!}
	     <!-- /input-group -->
        {!! Form::close() !!}

      </div>
    </div>
   </div>
