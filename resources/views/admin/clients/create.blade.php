@extends('app')

@section('content')

<div class="container">
	<h3>Novo cliente</h3>

	<a href="{{route('admin.clients.index')}}" class="btn btn-default">Voltar</a>
	<br><br>

	@if(Session::has('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
	@endif


	{!! Form::open(['route'=>'admin.clients.store', 'class'=>'form']) !!}

		@include('admin.clients._form')

		<div class="form-group">
			{!! Form::submit('Criar cliente', ['class'=>'btn btn-primary']) !!}	
		</div>
		
	
	{!! Form::close() !!}
	
</div>
@endsection