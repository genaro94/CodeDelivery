@extends('app')

@section('content')

<div class="container">
	<h3>Edição produto: {{$product->name}}</h3>

	<a href="{{route('admin.products.index')}}" class="btn btn-default">Voltar</a>
	<br><br>

	@if(Session::has('message'))
		<div class="alert alert-info">{{Session::get('message')}}</div>
	@endif


	{!! Form::model($product, ['route'=>['admin.products.update', $product->id]]) !!}

		@include('admin.products._form')

		<div class="form-group">
			{!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}	
		</div>
		
	
	{!! Form::close() !!}
	
</div>

@endsection