@extends('app')

@section('content')

<div class="container">
	<h3>Novo produto</h3>

	<a href="{{route('admin.products.index')}}" class="btn btn-default">Voltar</a>
	<br><br>

	@if(Session::has('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
	@endif


	{!! Form::open(['route'=>'admin.products.store', 'class'=>'form']) !!}

		@include('admin.products._form')

		<div class="form-group">
			{!! Form::submit('Criar produto', ['class'=>'btn btn-primary']) !!}	
		</div>
		
	
	{!! Form::close() !!}
	
</div>

@endsection