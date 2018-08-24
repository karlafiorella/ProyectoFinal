@extends('layouts.app')

@section('content')	
<div class="container mt-5">
	<div class="row">
		<div class=col-lg-8>
			<h2>
				{{ $servicio->imagen }}
				<a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary float-right ml-3">Editar</a>
				<a href="{{ route('servicios.index', $servicio->id) }}" class="btn btn-success float-right">Listado</a>
			</h2>
			<p>
				{{ $servicio->title }}
			</p>
				{!! $servicio->description !!}
		</div>

		<div class="col-sm-4">
			@include('servicios.fragment.aside')
		</div>
	</div>
</div>

@endsection
