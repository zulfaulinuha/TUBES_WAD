<?php

namespace App\Http\Controllers;

use App\User;
use App\Karyawan;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $users = User::with('karyawan')->get();
        // $hasil = Post::where('user_id', Auth::User()->id)->get();
        // dd($users);
        return view('user/index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawans = Karyawan::get();
        return view('user/create',compact('karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validationData->fails() || ($request->password !== $request->confrim_password)) {
            return redirect()->route('user.create');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'karyawan_id' => $request->karyawan_id,
            'status' => $request->status
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan_Proyek  $laporan_Proyek
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan_Proyek  $laporan_Proyek
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $karyawans = Karyawan::get();
        return view('user.edit',compact('karyawans','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan_Proyek  $laporan_Proyek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request);
        $user = User::findOrFail($user->id);
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $input = $request->only('name','email');
        Auth::user()->update($input);
        
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan_Proyek  $laporan_Proyek
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
