@component('mail::message')
# Introduction
Marl de: {{ $nombre }}{{ $apellido }}

Mensaje: {{ $msg }}

Responderle a: {{ $email }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
