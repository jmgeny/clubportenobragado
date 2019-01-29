  <div class="form-group">
    {!! Form::label('nombre', 'Socio') !!}
    {!! Form::Text('apellido', null, ['class'=> 'form-control']) !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('deporte','Deporte') !!}
    {!! Form::select('deporte_id',\Porteno\Sport::orderBy('nombre')->pluck('nombre','id')) !!}
  </div> 

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>  