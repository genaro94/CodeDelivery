@extends('app')

@section('content')

<div class="container">
	<h3>Produtos</h3>

	<a href="{{route('admin.products.create')}}" class="btn btn-default">Novo produto</a>
	<br><br>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Categoria</th>
				<th>Preço</th>
				<th style="width: 120px">Ação</th>
			</tr>
		</thead>

		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->category->name }}</td>
				<td>{{ $product->price }}</td>
				<td style="text-align: center">
					<a href="{{ route('admin.products.edit', ['id'=>$product->id]) }}">
						<button type="button" class="btn btn-success btn-sm">
				          <span class="glyphicon glyphicon-edit"></span> 
				        </button>
			        </a>
			        <a href="{{ route('admin.products.destroy', ['id'=>$product->id]) }}">
						<button type="button" class="btn btn-danger btn-sm">
				          <span class="glyphicon glyphicon-trash"></span> 
				        </button>
			        </a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{{$products->render()}}
	</div>
</div>

@endsection