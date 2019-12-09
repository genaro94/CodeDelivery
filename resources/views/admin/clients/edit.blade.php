@extends('app')

@section('content')

<div class="container">
	<h3>Edição cliente: {{$client->user->name}}</h3>

	<a href="{{route('admin.clients.index')}}" class="btn btn-default">Voltar</a>
	<br><br>

	@if(Session::has('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
	@endif


	{!! Form::model($client, ['route'=>['admin.clients.update', $client->id]]) !!}

		@include('admin.clients._form')

		<div class="form-group">
			{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}	
		</div>
		
	
	{!! Form::close() !!}
	
</div>

@endsection