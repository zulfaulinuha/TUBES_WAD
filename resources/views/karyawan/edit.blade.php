@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Karyawan</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Edit</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('karyawan.update',$karyawan->id) }}" >
                            @csrf 
                            @method('PUT')
    
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Nama</strong></label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$karyawan->nama}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Jenis Kelamin</strong></label>
                                    <select class="form-control" name="jk" required>
                                        <option selected value="">~~Pilih Jenis Kelamin~~</option>
                                        @if ($karyawan->jk == "Laki-laki")
                                            <option selected value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        @else
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option selected value="Perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Email</strong></label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{$karyawan->email}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Tempat Tanggal Lahir</strong></label>
                                    <input type="text" class="form-control" placeholder="Tempat Tanggal Lahir" name="ttl" value="{{$karyawan->ttl}}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Alamat</strong></label>
                                    <textarea class="form-control" rows="3" name="alamat" required>{{$karyawan->alamat}}</textarea>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('karyawan.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary" title="Simpan"><i class="fa fa-floppy-o"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pelanggan</div>

                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
