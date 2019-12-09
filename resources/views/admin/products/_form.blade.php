<div class="form-group">
	{!! Form::label('Category', 'Categoria:') !!}
	{!! Form::select('category_id', $categories, null,  ['class'=>'form-control']) !!}	
	@if($errors->has('category'))
		<strong class="text-danger">{{ $errors->first('category') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('Name', 'Nome:') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}	
	@if($errors->has('name'))
		<strong class="text-danger">{{ $errors->first('name') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('Description', 'Descrição:') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}	
	@if($errors->has('description'))
		<strong class="text-danger">{{ $errors->first('description') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('Price', 'Preço:') !!}
	{!! Form::text('price', null, ['class'=>'form-control']) !!}	
	@if($errors->has('price'))
		<strong class="text-danger">{{ $errors->first('price') }}</strong>
	@endif
</div>


