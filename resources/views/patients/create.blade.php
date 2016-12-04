@extends('layouts.master')

@section('content')
	{!! Form::open(['route' => 'patients.store']) !!}
		@include('patients.form')
	{!! Form::close() !!}
@stop
