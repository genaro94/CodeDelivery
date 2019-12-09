<div class="form-group">
	{!! Form::label('name', 'Nome:') !!}
	{!! Form::text('user[name]', null, ['class'=>'form-control']) !!}	
	@if($errors->has('name'))
		<strong class="text-danger">{{ $errors->first('name') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('email', 'E-mail:') !!}
	{!! Form::text('user[email]', null, ['class'=>'form-control']) !!}	
	@if($errors->has('email'))
		<strong class="text-danger">{{ $errors->first('email') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('phone', 'Telefone:') !!}
	{!! Form::text('phone', null, ['class'=>' form-control']) !!}	
	@if($errors->has('phone'))
		<strong class="text-danger">{{ $errors->first('phone') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('address', 'Endereço:') !!}
	{!! Form::textarea('address', null, ['class'=>'form-control']) !!}	
	@if($errors->has('address'))
		<strong class="text-danger">{{ $errors->first('address') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('city', 'Cidade:') !!}
	{!! Form::text('city', null, ['class'=>' form-control']) !!}	
	@if($errors->has('city'))
		<strong class="text-danger">{{ $errors->first('city') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('state', 'Estado:') !!}
	{!! Form::text('state', null, ['class'=>' form-control']) !!}	
	@if($errors->has('state'))
		<strong class="text-danger">{{ $errors->first('state') }}</strong>
	@endif
</div>

<div class="form-group">
	{!! Form::label('zipcode', 'CEP:') !!}
	{!! Form::text('zipcode', null, ['class'=>' form-control']) !!}	
	@if($errors->has('zipcode'))
		<strong class="text-danger">{{ $errors->first('zipcode') }}</strong>
	@endif
</div>