@extends('app')

@section('content')

<div class="container">
	<h3>Categorias</h3>

	<a href="{{route('admin.categories.create')}}" class="btn btn-default">Nova categoria</a>
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
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td style="text-align: center">
					<a href="{{ route('admin.categories.edit', ['id'=>$category->id]) }}">
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
		{{$categories->render()}}
	</div>
</div>

@endsection