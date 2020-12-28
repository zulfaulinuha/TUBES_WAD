@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Karyawan</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Detail</div>
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><strong>Nama</strong></label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$karyawan->nama}}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label><strong>Jenis Kelamin</strong></label>
                                <input type="text" class="form-control" placeholder="JK" name="jk" value="{{$karyawan->jk}}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><strong>Email</strong></label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{$karyawan->email}}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label><strong>Tempat Tanggal Lahir</strong></label>
                                <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" name="ttl" value="{{$karyawan->ttl}}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label><strong>Alamat</strong></label>
                                <textarea class="form-control" rows="3" name="alamat" disabled>{{$karyawan->alamat}}</textarea>
                            </div>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('karyawan.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
