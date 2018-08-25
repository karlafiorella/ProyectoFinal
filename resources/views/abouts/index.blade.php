@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Listado de acerca de<a href="{{ route('abouts.create') }}" class="btn btn-primary float-right">Nuevo</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            @include('abouts.fragment.aside')
        </div>
    </div>
    <div class="row">
        <div class=col-lg-12>
            <br>
                @include('abouts.fragment.info')
            <br>
          <table class="table table-hover table-striped">
               <thead>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th colspan="3">Acciones</th>
               </thead>
               <tbody>
                    @foreach($abouts as $about)
                    <tr>                        
                         <td>{{ $about->id }}</td>
                         <td>
                           @if($about->file)
                               <img src="{{ $about->file }}" class="img-responsive" width="100" height="100">
                           @endif
                         </td>
                         <td>
                            <strong>{{ $about->imagen }}</strong> 
                         </td>
                         <td>
                           <strong>{{ $about->title }}</strong>                           
                         </td>
                         <td>{{ $about->description }}</td>
                         <td>
                              <a href="{{ route('abouts.show', $about->id) }}" class="btn btn-link">Ver</a>
                         </td>
                         <td>
							<a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-link">Editar</a>
						</td>
                         <td>
                         	<form action="{{ route('abouts.destroy', $about->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
          {!! $abouts->render() !!}
     </div>
    

     </div>
</div>
@endsection
