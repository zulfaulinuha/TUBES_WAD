@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Laporan</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Tambah</div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('laporan.store')}}" >
                            @csrf 
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Nama Laporan</strong></label>
                                    <input type="text" class="form-control" placeholder="Nama Laporan" name="nama" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Nama Proyek</strong></label>
                                    <select class="form-control" name="project_id" required>
                                        <option selected value="">~~Pilih Project~~</option>
                                        @foreach($projects as $project)
                                            <option value="{{$project->id}}">{{$project->id}} : {{$project->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-12 mx-auto">
                                    <div class="justify-content-end">
                                        <a href="{{ route('laporan.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
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
