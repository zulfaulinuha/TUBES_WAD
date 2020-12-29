<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $karyawan = DB::table('karyawans')
                ->select(DB::raw('COUNT(id) as count'))
                ->get();   
        $proyek = DB::table('proyeks')
                ->select(DB::raw('COUNT(id) as count'))
                ->get();  
        $laporan = DB::table('laporans')
                ->select(DB::raw('COUNT(id) as count'))
                ->get(); 
        return view('home',compact('karyawan','proyek', 'laporan'));
    }
}
