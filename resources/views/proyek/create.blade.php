@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Proyek</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Tambah</div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('proyek.store')}}" >
                            @csrf 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Nama</strong></label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Deadline</strong></label>
                                    <input type="date" class="form-control" placeholder="Deatline" name="deatline" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Penaggung Jawab</strong></label>
                                    <select class="form-control" name="karyawan_id" required>
                                        <option selected value="">~~Pilih Karyawan~~</option>
                                        @foreach($karyawans as $karyawan)
                                            <option value="{{$karyawan->id}}">{{$karyawan->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Stakeholder</strong></label>
                                    <input type="text" class="form-control" placeholder="Stakeholder" name="stakeholder" required>
                                </div>
                                <input type="hidden" value="Pembuatan" name="status" required>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-12 mx-auto">
                                    <div class="justify-content-end">
                                        <a href="{{ route('proyek.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
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
