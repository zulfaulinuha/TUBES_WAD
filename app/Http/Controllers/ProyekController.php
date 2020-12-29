<?php

namespace App\Http\Controllers;

use App\Proyek;
use App\Karyawan;
use Illuminate\Http\Request;

class ProyekController extends Controller
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
        $projects = Proyek::with('karyawan')->get();
        // $hasil = Post::where('user_id', Auth::User()->id)->get();
        // dd($projects);
        return view('proyek/index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawans = Karyawan::get();
        return view('proyek/create',compact('karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Proyek::create($request->all());
        return redirect()->route('proyek.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function show(Proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        $karyawans = Karyawan::get();
        return view('proyek.edit',compact('karyawans','proyek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyek $proyek)
    {
        $proyek->update($request->all());
        return redirect()->route('proyek.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyek  $proyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyek $proyek)
    {
        $proyek->delete();
        return redirect()->route('proyek.index');
    }
}
