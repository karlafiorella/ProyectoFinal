@extends('layouts.app')



<br><br>
@section('content')	
<div class="container mt-5">
     <div class="row">
	<div class=col-lg-8>
		<h2>
			Nuevo carrusel
     			<a href="{{ route('carrusels.index') }}" class="btn btn-primary float-right">Listado</a>
		</h2>
		<br>
		   @include('carrusels.fragment.error')
			
			{!! Form::open(['route' => 'carrusels.store', 'files' => true]) !!}
	        	@include('carrusels.fragment.form')
			{!! Form::close() !!}

	</div>

	<div class="col-sm-4">
		@include('carrusels.fragment.aside')
	</div>
 </div>
</div>

@endsection
