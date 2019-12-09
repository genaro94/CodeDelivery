@extends('app')

@section('content')

<div class="container">
	<h3>Clientes</h3>

	<a href="{{route('admin.clients.create')}}" class="btn btn-default">Novo cliente</a>
	<br><br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th style="width: 100px">Ação</th>
			</tr>
		</thead>

		<tbody>
			@foreach($clients as $client)
			<tr>
				<td>{{ $client->id }}</td>
				<td>{{ $client->user->name }}</td>
				<td style="text-align: center">
					<a href="{{ route('admin.clients.edit', ['id'=>$client->id]) }}">
						<button type="button" class="btn btn-success btn-sm">
				          <span class="glyphicon glyphicon-edit"></span> 
				        </button>
			        </a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{{$clients->render()}}
	</div>
</div>

@endsection