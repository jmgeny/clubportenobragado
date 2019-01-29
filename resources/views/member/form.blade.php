  <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::Text('apellido', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('mail', 'e-mail') !!}
    {!! Form::text('mail', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('dni', 'DNI') !!}
    {!! Form::text('dni', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('address', 'Dirección') !!}
    {!! Form::text('address', null, ['class'=> 'form-control']) !!}
  </div>  

  <div class="form-group">
    {!! Form::label('phone', 'Teléfono') !!}
    {!! Form::text('phone', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('nacimiento', 'Fecha de Nacimiento') !!}
    {!! Form::date('nacimiento', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('ingreso', 'Fecha de Ingreso') !!}
    {!! Form::date('ingreso', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('city','Ciudad') !!}
    {!! Form::select('city_id',\Porteno\City::orderBy('nombre')->pluck('nombre','id'),null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('sports','Deportes:') !!}
 <div class="foreach">
            @foreach($member->sports as $sport)
              <div class="foreach">
                {{ ($sport->nombre) }} 
              </div>
            @endforeach
            </div>

    <a href="{{ route('deportesocio.show',$member->id) }}" class="btn btn-primary">Actualizar Deporte</a>
  </div>  

  <div class="form-group">
    {!! Form::label('avatar', 'Foto') !!}
    {!! Form::file('avatar') !!}
  </div>

  <div class="form-group">
    {!! Form::label('estado', 'Estado') !!}
    {!! Form::checkbox('estado'); !!}
    {{-- {!! Form::radio('state', 'value'); !!} --}}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>