@extends('layouts.app')



<br><br>
@section('content')	
<div class="container mt-5">
     <div class="row">
	<div class=col-lg-8>
		<h2>
			Nuevo team
     			<a href="{{ route('teams.index') }}" class="btn btn-primary float-right">Listado</a>
		</h2>
		<br>
		   @include('teams.fragment.error')
			
			{!! Form::open(['route' => 'teams.store', 'files' => true]) !!}
	        	@include('teams.fragment.form')
			{!! Form::close() !!}

	</div>

	<div class="col-sm-4">
		@include('teams.fragment.aside')
	</div>
 </div>
</div>

@endsection
