<div class="form-group">
     {{ Form::label('file', 'Imagen') }}
     {{ Form::file('file') }}
</div>

<div class="form-group">
	{!! Form::label('name', 'Nombre y Apellido') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('position', 'Posición') !!}
	{!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('twitter', 'Twetter') !!}
	{!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('facebook', 'Facebook') !!}
	{!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('linkin', 'Linkedin') !!}
	{!! Form::text('linkin', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('google', 'Google') !!}
	{!! Form::text('google', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
