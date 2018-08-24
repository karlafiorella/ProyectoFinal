<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio; 
use App\Http\Requests\ServicioRequest;
use Storage;

class ServicioController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $servicios= Servicio::orderBy('id','DESC')->paginate(15); // si le pongo un numero en el parentesis de paginate muestra ese numero de servicios
        return view('servicios.index', compact('servicios'));

        //return view ('servicios.index',compact('servicios')); //El primer parametro es la ruta. PRODUCTS: nombre de la carpeta que creamos en view en este caso servicios
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(ServicioRequest $request)
   {
       $servicio = new Servicio;

      
       $servicio->imagen   = $request->imagen;
       $servicio->title  = $request->title;
       $servicio->description   = $request->description;

       $servicio->save();


       return redirect()->route('servicios.index')->with('info', 'La Caracteristica fue guardada.');
   }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.show', compact('servicio'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);
        return view('servicios.edit', compact('servicio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function update(ServicioRequest $request, $id)
    {
        $servicio = Servicio::find($id);

         

        $servicio ->imagen   =   $request->imagen;
        $servicio ->title    =   $request->title;
        $servicio ->description    =   $request->description;

        $servicio->save();

        return redirect()->route('servicios.index')->with('info', 'La caracteristica fue actualizada.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $servicio = Servicio::find($id);
      $servicio->delete();

      return back()->with('info','La caracteristica fue eliminada.');



    }
}
