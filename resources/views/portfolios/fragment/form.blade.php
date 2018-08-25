<div class="form-group">
     {{ Form::label('file', 'Imagen') }}
     {{ Form::file('file') }}
</div>

<div class="form-group">
	{!! Form::label('title', 'Titulo de la imagen') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('type', 'Tipo de la imagen') !!}
	{!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('filter', 'Filtro') !!}
	{!! Form::text('filter', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
