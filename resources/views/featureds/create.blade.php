@extends('layouts.app')



<br><br>
@section('content')	
<div class="container mt-5">
     <div class="row">
	<div class=col-lg-8>
		<h2>
			Nueva caracteristica
     			<a href="{{ route('featureds.index') }}" class="btn btn-primary float-right">Listado</a>
		</h2>
		<br>
		   @include('featureds.fragment.error')
			
			{!! Form::open(['route' => 'featureds.store']) !!}
	        	@include('featureds.fragment.form')
			{!! Form::close() !!}

	</div>

	<div class="col-sm-4">
		@include('featureds.fragment.aside')
	</div>
 </div>
</div>

@endsection
