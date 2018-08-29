<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team; 
use App\Http\Requests\TeamRequest;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
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
        $teams= Team::orderBy('id','DESC')->paginate(4);
        return view('teams.index', compact('teams'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $team = new Team;

       $team->file   = $request->file;
       $team->name   = $request->name;
       $team->position  = $request->position;
        $team ->twitter    =   $request->twitter;
        $team ->facebook    =   $request->facebook;
        $team ->linkin    =   $request->linkin;
        $team ->google    =   $request->google;
       

       $team->save();


       //IMAGE
       if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $team->fill(['file' => asset($path)])->save();
       }

       return redirect()->route('teams.index')->with('info', 'La persona fue guardada en el team.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.show', compact('team'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(TeamRequest $request, $id)
    {
        $team = Team::find($id);

         if($request->file('file')){
           $path = Storage::disk('public')->put('image', $request->file('file'));
           $team->fill(['file' => asset($path)])->save();
       }

        $team ->name   =   $request->name;
        $team ->position    =   $request->position;
        $team ->twitter    =   $request->twitter;
        $team ->facebook    =   $request->facebook;
        $team ->linkin    =   $request->linkin;
        $team ->google    =   $request->google;
       

        $team->save();

        return redirect()->route('teams.index')->with('info', 'La persona del team fue actualizada.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $team = Team::find($id);
      $team->delete();

      return back()->with('info','La persona fue eliminada del team');




    }
}
