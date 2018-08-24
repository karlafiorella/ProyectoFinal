@extends('layouts.app')

@section('content') 
<div class="container mt-5">
     <div class="row">
     <div class=col-lg-8>
         <h2>
                Editar caracteristica
                      <a href="{{ route('featureds.index') }}" class="btn btn-default float-right">Listado</a>
          </h2>
          <br>
          @include('featureds.fragment.error')
      
          {!! Form::model($featured, ['route' => ['featureds.update', $featured->id], 'method' => 'PUT']) !!}
               @include('featureds.fragment.form')
          {!! Form::close() !!}
      </div>
      <div class="col-sm-4">
                  @include('featureds.fragment.aside')
      </div>
     </div>
</div>
@endsection

