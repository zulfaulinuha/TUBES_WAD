@extends('layouts.dashboard')
@section('content')
    <div class="container justify-center">
        <div class="h-100 row align-items-center">
            <div class="col">
                <h1 class="text-white">Selamat Datang di Kantor Jasa Akuntan</h1>
                <p class="text-white">Kami melayani jasa akutansi keuangan yang aman dan amanah.</p>
                <a type="button" class="btn btn-primary" href="{{ route('login') }}">Get Started</a>
            </div>
            <div class="col">
                <img src="{{ asset('img/Photo1.png') }}" alt="" width="500px">
            </div>
        </div>
    </div>
@endsection
