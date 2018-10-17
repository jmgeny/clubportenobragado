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
{{--     {!! Form::select('sport_id', \Porteno\Sport::orderBy('nombre')->pluck('nombre','id'), null, ['class'=> 'form-control']) !!} --}}
    <a href="{{route('activity.create') }}" class="btn btn-primary" >Agregar</a>
  </div>  

  <div class="form-group">
    {!! Form::label('dni', 'DNI') !!}
    {!! Form::text('dni', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('phone','Teléfono') !!}
    {!! Form::text('phone', null , ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('nacimiento','Fecha de Nacimiento') !!}
    {!! Form::date('nacimiento', null , ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('ingreso','Fecha de Ingreso') !!}
    {!! Form::date('ingreso', null , ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('address','Dirección') !!}
    {!! Form::text('address', null , ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('ciudad', 'Ciudad') !!}
    {!! Form::select('city_id',\Porteno\City::orderBy('name')->pluck('name','id')
    ,null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('estado','Estado') !!}
    {!! Form::checkbox('estado',true) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>    
           
