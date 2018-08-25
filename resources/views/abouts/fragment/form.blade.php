
<div class="form-group">
     {{ Form::label('file', 'Foto del acerca de') }}
     {{ Form::file('file') }}
</div>
<div class="form-group">
	{!! Form::label('imagen', 'Imagen del acerca de') !!}
	{!! Form::text('imagen', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('title', 'Descripción breve del acerca de') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Descripción del acerca de') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
