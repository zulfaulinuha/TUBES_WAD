<?php

namespace App\Http\Controllers;

use App\History;
use App\Proyek;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $histores = History::with('project')->get();
        // $hasil = Post::where('user_id', Auth::User()->id)->get();
        // dd($projects);
        return view('history/index',compact('histores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Proyek::get();
        return view('history/create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        History::create($request->all());

        $project = Proyek::findOrFail($request->project_id);
        $project->status = $request->status;
        $project->save(); 
        
        return redirect()->route('history.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        $projects = Proyek::get();
        return view('history.edit',compact('projects','history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        $history->update($request->all());

        $project = Proyek::findOrFail($request->project_id);
        $project->status = $request->status;
        $project->save(); 

        return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        $history->delete();
        return redirect()->route('history.index');
    }
}
