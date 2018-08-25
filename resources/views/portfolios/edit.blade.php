@extends('layouts.app')

@section('content')    
<div class="container mt-5">
    <div class="row">
    <div class=col-lg-8>
        <h2>
               Editar portafolio
                     <a href="{{ route('portfolios.index') }}" class="btn btn-primary float-right">Listado</a>
         </h2>
         <br>
         @include('portfolios.fragment.error')

         {!! Form::model($portfolio, ['route' => ['portfolios.update', $portfolio->id], 'method' => 'PUT', 'files' => true]) !!}

              @include('portfolios.fragment.form')

         {!! Form::close() !!}
     </div>
     <div class="col-sm-4">
                 @include('portfolios.fragment.aside')
     </div>
    </div>
</div>
@endsection

