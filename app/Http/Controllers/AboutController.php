<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About; 
use App\Http\Requests\AboutRequest;
use Storage;

class AboutController extends Controller
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
        
        $abouts= About::orderBy('id','DESC')->paginate(15); // si le pongo un numero en el parentesis de paginate muestra ese numero de abouts
        return view('abouts.index', compact('abouts'));

        //return view ('abouts.index',compact('abouts')); //El primer parametro es la ruta. PRODUCTS: nombre de la carpeta que creamos en view en este caso abouts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(AboutRequest $request)
   {
       $about = new About;

      
       $about->imagen   = $request->imagen;
       $about->title  = $request->title;
       $about->description   = $request->description;

       $about->save();

       //IMAGE
       if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $about->fill(['file' => asset($path)])->save();
       }


       return redirect()->route('abouts.index')->with('info', 'El acerca de fue guardado.');
   }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = About::find($id);
        return view('abouts.show', compact('about'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('abouts.edit', compact('about'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function update(AboutRequest $request, $id)
    {
        $about = About::find($id);

         if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $about->fill(['file' => asset($path)])->save();
       }

        $about ->imagen   =   $request->imagen;
        $about ->title    =   $request->title;
        $about ->description    =   $request->description;

        $about->save();

        return redirect()->route('abouts.index')->with('info', 'El acerca de fue actualizado.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $about = About::find($id);
      $about->delete();

      return back()->with('info','El acerca de fue eliminado.');



    }
}
