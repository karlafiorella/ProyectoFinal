@extends('layouts.app')

@section('content')	
<div class='container'>
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4"></div>
		<div class="col-lg-4 alert alert-primary" role="alert">
		    @include('portfolios.fragment.aside')
		</div>
	</div>
	<div class="row">
	<div class="col-lg-8">

		<h2>
			<a href="{{ route('portfolios.index', $portfolio->id) }}" class="btn btn-primary float-right">Listado</a>
			{{ $portfolio->title }}
			<a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-primary float-right mr-3">Editar</a>
		</h2>
		<p>
			{!! $portfolio->type !!}
		</p>
		<p>
			{!! $portfolio->filter !!}
		</p>
			
	</div>
	</div>
</div>
@endsection


