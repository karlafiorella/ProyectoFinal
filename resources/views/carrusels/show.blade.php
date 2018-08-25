@extends('layouts.app')

@section('content')	
<div class='container'>
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4 alert alert-primary" role="alert">
		    @include('carrusels.fragment.aside')
		</div>
	</div>
	<div class="row">
	<div class="col-lg-8">

		<h2>
			<a href="{{ route('carrusels.index', $carrusel->id) }}" class="btn btn-primary float-right">Listado</a>
			{{ $carrusel->title }}
			<a href="{{ route('carrusels.edit', $carrusel->id) }}" class="btn btn-primary float-right mr-3">Editar</a>
		</h2>
		<p>
			{!! $carrusel->description !!}
		</p>
			
	</div>
	</div>
</div>
@endsection


