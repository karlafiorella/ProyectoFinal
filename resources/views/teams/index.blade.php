
@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Listado de team<a href="{{ route('teams.create') }}" class="btn btn-primary float-right">Nuevo</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            @include('teams.fragment.aside')
        </div>
    </div>
    <div class="row">
        <div class=col-lg-12>
            <br>
                @include('teams.fragment.info')
            <br>
          <table class="table table-hover table-striped">
               <thead>
                    
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Posición</th>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Linkedin</th>
                    <th>Google</th>
                    <th colspan="3">Acciones</th>
               </thead>
               <tbody>
                    @foreach($teams as $team)
                    <tr>
                         
                         <td>
                           @if($team->file)
                               <img src="{{ $team->file }}" class="img-responsive" width="100" height="100">
                           @endif
                         </td>
                         <td>
                           <strong>{{ $team->name }}</strong>                           
                         </td>
                         <td>{{ $team->position }}</td>
                         <td>{{ $team->twitter }}</td>
                         <td>{{ $team->facebook }}</td>
                         <td>{{ $team->linkin }}</td>
                         <td>{{ $team->google }}</td>
                         <td>
                              <a href="{{ route('teams.show', $team->id) }}" class="btn btn-link">Ver</a>
                         </td>
                         <td>
                                   <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-link">Editar</a>
                              </td>
                         <td>
                              <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-link">Borrar</button>
                                   </form>
                              </td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
          {!! $teams->render() !!}
     </div>
     </div>
</div>
@endsection
