@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Elija Opción</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('member.index') }}" class="btn btn-primary">Socios</a>
                    <a href="{{ route('nota.index') }}" class="btn btn-primary">Notas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
