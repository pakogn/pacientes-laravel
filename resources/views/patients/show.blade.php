@extends('layouts.master')

@section('content')
	<h1>{{ $patient->name }} {{ $patient->paternal_surname }}</h1>

	<a href="{{ route('patients.edit', $patient) }}">Editar</a>

	{!! Form::open(['route' => ['patients.destroy', $patient], 'method' => 'DELETE']) !!}
		{!! Form::submit('Eliminar') !!}
	{!! Form::close() !!}
@stop
