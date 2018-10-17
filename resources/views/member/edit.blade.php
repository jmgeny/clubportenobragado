@extends('layouts.admin')

@section('title','Edit')

@section('content')
	<section class="container">
		<section class="row">
			<selction class="col-sm-2">
				
			</selction>
			<section class="col-sm-8">
			    <h2>
			      Editar Miembro
			      <a href="{{route('member.index')}}" class="btn btn-primary pull-right">Listar</a>
			    </h2>
			    @include('member.codigo.info')
			    {{-- @include('extras.error') --}}
		    {!! Form::model($member, ['route' => ['member.update', $member->id], 'method' =>'PUT', 'files' => true]) !!}
		      @include('member.codigo.form')
		    {!! Form::close() !!}  
		    
			</section>
			<selction class="col-sm-2">
				
			</selction>			
		</section>
	</section>
@endsection