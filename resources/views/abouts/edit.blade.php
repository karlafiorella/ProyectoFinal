@extends('layouts.app')

@section('content') 
<div class="container mt-5">
     <div class="row">
     <div class=col-lg-8>
         <h2>
                Editar acerca de
                      <a href="{{ route('abouts.index') }}" class="btn btn-default float-right">Listado</a>
          </h2>
          <br>
          @include('abouts.fragment.error')
      
       {!! Form::model($about, ['route' => ['abouts.update', $about->id], 'method' => 'PUT', 'files' => true]) !!}

              @include('abouts.fragment.form')

         {!! Form::close() !!}
      </div>
      <div class="col-sm-4">
                  @include('abouts.fragment.aside')
      </div>
     </div>
</div>
@endsection

