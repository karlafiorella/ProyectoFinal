
@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Listado de portafolio<a href="{{ route('portfolios.create') }}" class="btn btn-primary float-right">Nuevo</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            @include('portfolios.fragment.aside')
        </div>
    </div>
    <div class="row">
        <div class=col-lg-12>
            <br>
                @include('portfolios.fragment.info')
            <br>
          <table class="table table-hover table-striped">
               <thead>
                    
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Tipo</th>
                    <th>Filtro</th>
                    <th colspan="3">Acciones</th>
               </thead>
               <tbody>
                    @foreach($portfolios as $portfolio)
                    <tr>
                         
                         <td>
                           @if($portfolio->file)
                               <img src="{{ $portfolio->file }}" class="img-responsive" width="100" height="100">
                           @endif
                         </td>
                         <td>
                           <strong>{{ $portfolio->title }}</strong>                           
                         </td>
                         <td>{{ $portfolio->type }}</td>
                         <td>{{ $portfolio->filter }}</td>
                         <td>
                              <a href="{{ route('portfolios.show', $portfolio->id) }}" class="btn btn-link">Ver</a>
                         </td>
                         <td>
                                   <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-link">Editar</a>
                              </td>
                         <td>
                              <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-link">Borrar</button>
                                   </form>
                              </td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
          {!! $portfolios->render() !!}
     </div>
     </div>
</div>
@endsection
