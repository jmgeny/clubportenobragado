  <div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('mail', 'e-mail') !!}
    {!! Form::email('mail', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('sport_id', 'Deporte') !!}
    {!! Form::select('sport_id', \Porteno\Sport::orderBy('nombre')->pluck('nombre','id') ,null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>  