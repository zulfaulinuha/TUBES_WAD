@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">           
                <div class="panel panel-back noti-box">
                    <span class="icon-box set-icon">
                        <i class="fa fa-user-o"></i>
                    </span>
                    <div class="text-box" >
                        <p class="main-text">{{$karyawan[0]->count}}</p>
                        <p class="text-muted">Karyawan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">           
                <div class="panel panel-back noti-box">
                    <span class="icon-box set-icon">
                        <i class="fa fa-briefcase"></i>
                    </span>
                    <div class="text-box" >
                        <p class="main-text">{{$proyek[0]->count}}</p>
                        <p class="text-muted">Proyek</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">           
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-pink-red set-icon">
                        <i class="fa fa-file-text-o"></i>
                    </span>
                    <div class="text-box" >
                        <p class="main-text">{{$laporan[0]->count}}</p>
                        <p class="text-muted">Laporan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 align="center">Selamat Datang</h2>   
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                
              </h5>
            </div>
        
            <div id="collapse0" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <p align="center">Halaman ini merupakan halaman yang berisikan proses dari website KJA Teddy Alfonso ini, anda dapat menginputkan data-data yang telah disesiakan dan selamat mencoba.
                        <br><br> Anda telah login sebagai {{Auth::user()->status}}
                    </p>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection

