<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Featured; 
use App\Http\Requests\FeaturedRequest;
use Storage;

class FeaturedController extends Controller
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
        
        $featureds= Featured::orderBy('id','DESC')->paginate(15); // si le pongo un numero en el parentesis de paginate muestra ese numero de featuredos
        return view('featureds.index', compact('featureds'));

        //return view ('featureds.index',compact('featureds')); //El primer parametro es la ruta. PRODUCTS: nombre de la carpeta que creamos en view en este caso featureds
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('featureds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(FeaturedRequest $request)
   {
       $featured = new Featured;

      
       $featured->imagen   = $request->imagen;
       $featured->title  = $request->title;
       $featured->description   = $request->description;

       $featured->save();


       return redirect()->route('featureds.index')->with('info', 'La Caracteristica fue guardada.');
   }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $featured = Featured::find($id);
        return view('featureds.show', compact('featured'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $featured = Featured::find($id);
        return view('featureds.edit', compact('featured'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function update(FeaturedRequest $request, $id)
    {
        $featured = Featured::find($id);

         

        $featured ->imagen   =   $request->imagen;
        $featured ->title    =   $request->title;
        $featured ->description    =   $request->description;

        $featured->save();

        return redirect()->route('featureds.index')->with('info', 'La caracteristica fue actualizada.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $featured = Featured::find($id);
      $featured->delete();

      return back()->with('info','La caracteristica fue eliminada.');



    }
}
