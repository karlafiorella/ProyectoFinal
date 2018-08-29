@extends('layouts.app')

@section('content')	
<div class='container'>
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4 alert alert-primary" role="alert">
		    @include('teams.fragment.aside')
		</div>
	</div>
	<div class="row">
	<div class="col-lg-8">

		<h2>
			<a href="{{ route('teams.index', $team->id) }}" class="btn btn-primary float-right">Listado</a>
			{{ $team->nombre }}
			<a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary float-right mr-3">Editar</a>
		</h2>
		<p>
			{!! $team->position !!}
		</p>
		<p>
			{!! $team->twitter !!}
		</p>
		<p>
			{!! $team->facebook !!}
		</p>
		<p>
			{!! $team->linkin !!}
		</p>
		<p>
			{!! $team->google !!}
		</p>
			
	</div>
	</div>
</div>
@endsection


