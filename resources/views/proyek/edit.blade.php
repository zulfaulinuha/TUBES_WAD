@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Proyek</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Edit</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('proyek.update',$proyek->id) }}" >
                            @csrf 
                            @method('PUT')
    
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Nama</strong></label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{$proyek->nama}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Deatline</strong></label>
                                    <input type="date" class="form-control" placeholder="Deatline" name="deatline" value="{{$proyek->deatline}}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Penaggung Jawab</strong></label>
                                    <select class="form-control" name="karyawan_id" required>
                                        <option selected value="">~~Pilih Karyawan~~</option>
                                        @foreach($karyawans as $karyawan)
                                            @if ($karyawan->id == $proyek->karyawan_id)
                                                <option selected value="{{$karyawan->id}}">{{$karyawan->nama}}</option>
                                            @else
                                                <option value="{{$karyawan->id}}">{{$karyawan->nama}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Stakeholder</strong></label>
                                    <input type="text" class="form-control" placeholder="Stakeholder" name="stakeholder" value="{{$proyek->stakeholder}}" required>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('proyek.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
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
