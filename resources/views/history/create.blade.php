@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah History Proyek</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Tambah</div>
                    <div class="panel-body">
                        <form method="POST" action="{{route('history.store')}}" enctype="multipart/form-data">
                            @csrf 
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Nama</strong></label>
                                    <select class="form-control" name="project_id" required>
                                        <option selected value="">~~Pilih Project~~</option>
                                        @foreach($projects as $project)
                                            <option value="{{$project->id}}">{{$project->id}} : {{$project->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Laporan</strong> (Max 2MB)</label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control"  name="laporan">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Tanggal History</strong></label>
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Status Project</strong></label>
                                    <select class="form-control" name="status" required>
                                        <option selected value="">~~Pilih Status~~</option>
                                        <option value="Survei">Survei</option>
                                        <option value="Analisis">Analisis</option>
                                        <option value="Penyelesaian">Penyelesaian</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-12 mx-auto">
                                    <div class="justify-content-end">
                                        <a href="{{ route('history.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
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
