@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Listado de Servicios<a href="{{ route('servicios.create') }}" class="btn btn-primary float-right">Nuevo</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            @include('servicios.fragment.aside')
        </div>
    </div>
    <div class="row">
        <div class=col-lg-12>
            <br>
                @include('servicios.fragment.info')
            <br>
          <table class="table table-hover table-striped">
               <thead>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th colspan="3">Acciones</th>
               </thead>
               <tbody>
                    @foreach($servicios as $servicio)
                    <tr>
                         <td>{{ $servicio->id }}</td>
                         <td>
                            <strong>{{ $servicio->imagen }}</strong> 
                         </td>
                         <td>
                           <strong>{{ $servicio->title }}</strong>                           
                         </td>
                         <td>{{ $servicio->description }}</td>
                         <td>
                              <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-link">Ver</a>
                         </td>
                         <td>
							<a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-link">Editar</a>
						</td>
                         <td>
                         	<form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
          {!! $servicios->render() !!}
     </div>
    

     </div>
</div>
@endsection
