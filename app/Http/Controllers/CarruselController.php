<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrusel; 
use App\Http\Requests\CarruselRequest;
use Illuminate\Support\Facades\Storage;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrusels= Carrusel::orderBy('id','DESC')->paginate(5);
        return view('carrusels.index', compact('carrusels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('carrusels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarruselRequest $request)
    {
        $carrusel = new Carrusel;

       $carrusel->file   = $request->file;
       $carrusel->title   = $request->title;
       $carrusel->description  = $request->description;
       

       $carrusel->save();


       //IMAGE
       if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $carrusel->fill(['file' => asset($path)])->save();
       }

       return redirect()->route('carrusels.index')->with('info', 'La imagen fue guardada en el carrusel.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrusel = Carrusel::find($id);
        return view('carrusels.show', compact('carrusel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrusel = Carrusel::find($id);
        return view('carrusels.edit', compact('carrusel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(CarruselRequest $request, $id)
    {
        $carrusel = Carrusel::find($id);

         if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $carrusel->fill(['file' => asset($path)])->save();
       }

        $carrusel ->title   =   $request->title;
        $carrusel ->description    =   $request->description;
       

        $carrusel->save();

        return redirect()->route('carrusels.index')->with('info', 'La imagen del carrusel fue actualizada.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $carrusel = Carrusel::find($id);
      $carrusel->delete();

      return back()->with('info','La imagen fue eliminada del carrusel');




    }
}
