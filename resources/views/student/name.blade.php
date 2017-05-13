@extends('layout.app');

@section('title','Student name')

@section('body')

	{{'Student Name'}}
	<br>
	@foreach ($in as $in)
		{{$in->name}}
	@endforeach
	
@endsection
