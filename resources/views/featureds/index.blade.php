@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Listado de Caracteristicas<a href="{{ route('featureds.create') }}" class="btn btn-primary float-right">Nuevo</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            @include('featureds.fragment.aside')
        </div>
    </div>
    <div class="row">
        <div class=col-lg-12>
            <br>
                @include('featureds.fragment.info')
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
                    @foreach($featureds as $featured)
                    <tr>
                         <td>{{ $featured->id }}</td>
                         <td>
                            <strong>{{ $featured->imagen }}</strong> 
                         </td>
                         <td>
                           <strong>{{ $featured->title }}</strong>                           
                         </td>
                         <td>{{ $featured->description }}</td>
                         <td>
                              <a href="{{ route('featureds.show', $featured->id) }}" class="btn btn-link">Ver</a>
                         </td>
                         <td>
							<a href="{{ route('featureds.edit', $featured->id) }}" class="btn btn-link">Editar</a>
						</td>
                         <td>
                         	<form action="{{ route('featureds.destroy', $featured->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
          {!! $featureds->render() !!}
     </div>
    

     </div>
</div>
@endsection
