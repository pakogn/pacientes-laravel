@extends('layouts.master')

@section('content')
	Todos los pacientes

	@if ($patients->count() == 0)
		<h1>No hay pacientes!</h1>
	@else
		<ul>
			@foreach ($patients as $patient)
				<li><a href="{{ route('patients.show', $patient) }}">{{ $patient->name }} {{ $patient->paternal_surname }}</a></li>
			@endforeach
		</ul>
	@endif
@stop
