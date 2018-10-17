  <div class="form-group">
    {!! Form::label('member_id', 'Socio') !!}
    {!! Form::select('member_id', \Porteno\Member::orderBy('nombre')
        ->pluck('apellido','id') , null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('sport', 'Deporte') !!}
    {!! Form::select('sport_id',\Porteno\Sport::orderBy('nombre')->pluck('nombre','id')
    ,null,['class' => 'form-control']) !!}
  </div>
  
  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>  

  {{-- Quiero seleccionar el member y que en sport no aparezca los deportes que ya tiene --}}