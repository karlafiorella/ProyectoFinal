@extends('layouts.app')



<br><br>
@section('content')	
<div class="container mt-5">
     <div class="row">
	<div class=col-lg-8>
		<h2>
			Nuevo acerca de
     			<a href="{{ route('abouts.index') }}" class="btn btn-primary float-right">Listado</a>
		</h2>
		<br>
		   @include('abouts.fragment.error')
			
			{!! Form::open(['route' => 'abouts.store', 'files' => true]) !!}
	        	@include('abouts.fragment.form')
			{!! Form::close() !!}

	</div>

	<div class="col-sm-4">
		@include('abouts.fragment.aside')
	</div>
 </div>
</div>

@endsection
