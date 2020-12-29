@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah User</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Tambah</div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('user.store')}}" >
                            @csrf 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Nama Karyawan</strong></label>
                                    <select class="form-control" name="karyawan_id" required>
                                        <option selected value="">~~Pilih Karyawan~~</option>
                                        @foreach($karyawans as $karyawan)
                                            <option value="{{$karyawan->id}}">{{$karyawan->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Status</strong></label>
                                    <select class="form-control" name="status" required>
                                        <option selected value="">~~Pilih Status~~</option>
                                        <option value="admin">Admin</option>
                                        <option value="petinggi">Petinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Username</strong></label>
                                    <input type="text" class="form-control" placeholder="Username" name="name" required>
                                    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Email</strong></label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Password</strong></label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Confirm Password</strong></label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confrim_password" required autocomplete="new-password"> 
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-12 mx-auto">
                                    <div class="justify-content-end">
                                        <a href="{{ route('user.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
                                        <button type="submit" class="btn btn-primary" title="Simpan"><i class="fa fa-floppy-o"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
