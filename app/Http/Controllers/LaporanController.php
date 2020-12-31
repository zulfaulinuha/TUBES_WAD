<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\Proyek;
use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;

class LaporanController extends Controller
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
        $laporans = Laporan::with('project')->get();
        // $hasil = Post::where('user_id', Auth::User()->id)->get();
        // dd($projects);
        return view('laporan/index',compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Proyek::get();
        return view('laporan/create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Laporan::create($request->all());

        return redirect()->route('laporan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        $print = Proyek::with("histories", "karyawan")->get();

        // dd($print);

        $docpdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8');
		$docpdf->pdf->SetTitle('Laporan Proyek');
		$docpdf->writeHTML(view('laporan.pdf', compact('print', 'laporan')));
        $docpdf->output('laporan-project.pdf');
        
		return redirect()->route('laporan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.index');
    }
}
