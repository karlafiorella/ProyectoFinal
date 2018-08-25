@extends('layouts.app')

@section('content')	
<div class="container mt-5">
	<div class="row">
		<div class=col-lg-8>
			<h2>
				{{ $about->title }}
				<a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-primary float-right ml-3">Editar</a>
				<a href="{{ route('abouts.index', $about->id) }}" class="btn btn-success float-right">Listado</a>
			</h2>
			<p>
				{{ $about->imagen }}
			</p>
			<p> {!! $about->description !!}	</p>
		</div>

		<div class="col-sm-4">
			@include('abouts.fragment.aside')
		</div>
	</div>
</div>

@endsection
