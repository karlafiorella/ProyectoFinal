
@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Listado de carrusel<a href="{{ route('carrusels.create') }}" class="btn btn-primary float-right">Nuevo</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            @include('carrusels.fragment.aside')
        </div>
    </div>
    <div class="row">
        <div class=col-lg-12>
            <br>
                @include('carrusels.fragment.info')
            <br>
          <table class="table table-hover table-striped">
               <thead>
                    
                    <th>Foto</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th colspan="3">Acciones</th>
               </thead>
               <tbody>
                    @foreach($carrusels as $carrusel)
                    <tr>
                         
                         <td>
                           @if($carrusel->file)
                               <img src="{{ $carrusel->file }}" class="img-responsive" width="100" height="100">
                           @endif
                         </td>
                         <td>
                           <strong>{{ $carrusel->title }}</strong>                           
                         </td>
                         <td>{{ $carrusel->description }}</td>
                         <td>
                              <a href="{{ route('carrusels.show', $carrusel->id) }}" class="btn btn-link">Ver</a>
                         </td>
                         <td>
                                   <a href="{{ route('carrusels.edit', $carrusel->id) }}" class="btn btn-link">Editar</a>
                              </td>
                         <td>
                              <form action="{{ route('carrusels.destroy', $carrusel->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-link">Borrar</button>
                                   </form>
                              </td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
          {!! $carrusels->render() !!}
     </div>
     </div>
</div>
@endsection
