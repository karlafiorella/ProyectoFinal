@extends('layouts.app')

@section('content')	
<div class="container mt-5">
	<div class="row">
		<div class=col-lg-8>
			<h2>
				{{ $featured->imagen }}
				<a href="{{ route('featureds.edit', $featured->id) }}" class="btn btn-primary float-right ml-3">Editar</a>
				<a href="{{ route('featureds.index', $featured->id) }}" class="btn btn-success float-right">Listado</a>
			</h2>
			<p>
				{{ $featured->title }}
			</p>
				{!! $featured->description !!}
		</div>

		<div class="col-sm-4">
			@include('featureds.fragment.aside')
		</div>
	</div>
</div>

@endsection
