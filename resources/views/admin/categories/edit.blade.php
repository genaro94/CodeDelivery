@extends('app')

@section('content')

<div class="container">
	<h3>Edição categoria: {{$category->name}}</h3>

	<a href="{{route('admin.categories.index')}}" class="btn btn-default">Voltar</a>
	<br><br>

	@if(Session::has('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
	@endif


	{!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}

		@include('admin.categories._form')

		<div class="form-group">
			{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}	
		</div>
		
	
	{!! Form::close() !!}
	
</div>

@endsection