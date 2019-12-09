<div class="form-group">
	{!! Form::label('name', 'Nome:') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}	
	@if($errors->has('name'))
		<strong class="text-danger">{{ $errors->first('name') }}</strong>
	@endif
</div>