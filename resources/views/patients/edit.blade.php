@extends('layouts.master')

@section('content')
	{!! Form::model($patient, ['route' => ['patients.update', $patient], 'method' => 'PATCH']) !!}
		@include('patients.form')
	{!! Form::close() !!}
@stop
