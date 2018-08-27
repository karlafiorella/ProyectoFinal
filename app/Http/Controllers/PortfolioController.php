<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio; 
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        $portfolios= Portfolio::orderBy('id','DESC')->paginate(9);
        return view('portfolios.index', compact('portfolios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        $portfolio = new Portfolio;

       $portfolio->file   = $request->file;
       $portfolio->title   = $request->title;
       $portfolio->type  = $request->type;
       $portfolio->filter  = $request->filter;
       

       $portfolio->save();


       //IMAGE
       if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $portfolio->fill(['file' => asset($path)])->save();
       }

       return redirect()->route('portfolios.index')->with('info', 'La imagen fue guardada en el portfolio.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolios.show', compact('portfolio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolios.edit', compact('portfolio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(PortfolioRequest $request, $id)
    {
        $portfolio = Portfolio::find($id);

         if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $portfolio->fill(['file' => asset($path)])->save();
       }

        $portfolio ->title   =   $request->title;
        $portfolio ->type    =   $request->type;
        $portfolio->filter  = $request->filter;
       

        $portfolio->save();

        return redirect()->route('portfolios.index')->with('info', 'La imagen del portfolio fue actualizada.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $portfolio = Portfolio::find($id);
      $portfolio->delete();

      return back()->with('info','La imagen fue eliminada del portfolio');




    }
}
