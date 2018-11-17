  <div class="form-group">
    {!! Form::label('avatar', 'Foto') !!}
    {!! Form::file('avatar') !!}
  </div>
  
  <div class="form-group">
    {!! Form::label('titulo', 'Titulo') !!}
    {!! Form::text('titulo', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::Text('descripcion', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('desarrollo', 'Desarrollo') !!}
    {!! Form::textarea('desarrollo', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('fecha', 'Fecha de la Nota') !!}
    {!! Form::date('fecha', null, ['class'=> 'form-control']) !!}
  </div>


  <div class="form-group">
    {!! Form::label('state', 'Estado') !!}
    {!! Form::checkbox('state'); !!}
    {{-- {!! Form::radio('state', 'value'); !!} --}}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>