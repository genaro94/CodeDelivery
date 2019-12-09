@extends('app')

@section('content')

<div class="container">
	<h3>Nova categoria</h3>

	<a href="{{route('admin.categories.index')}}" class="btn btn-default">Voltar</a>
	<br><br>

	@if(Session::has('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
	@endif


	{!! Form::open(['route'=>'admin.categories.store', 'class'=>'form']) !!}

		@include('admin.categories._form')

		<div class="form-group">
			{!! Form::submit('Criar categoria', ['class'=>'btn btn-primary']) !!}	
		</div>
		
	
	{!! Form::close() !!}
	
</div>

@endsection