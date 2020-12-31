@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit History Proyek</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Edit</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('history.update',$history->id) }}" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')
    
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Nama Proyek</strong></label>
                                    <select class="form-control" name="project_id" required>
                                        <option selected value="">~~Pilih Project~~</option>
                                        @foreach($projects as $project)
                                            @if ($history->project_id == $project->id)
                                                <option selected value="{{$project->id}}">{{$project->id}} : {{$project->nama}}</option>
                                            @else
                                                <option value="{{$project->id}}">{{$project->id}} : {{$project->nama}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Laporan</strong>  (Max 2MB)</label>
                                    <input type="file" accept="application/pdf,application/vnd.ms-excel" class="form-control"  name="laporan" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label><strong>Tanggal History</strong></label>
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" value="{{$history->tanggal}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label><strong>Jenis Kelamin</strong></label>
                                    <select class="form-control" name="status" required>
                                        <option selected value="">~~Pilih Status~~</option>
                                        <option @if ($history->status == "Survei") selected @endif value="Survei">Survei</option>
                                        <option @if ($history->status == "Analisis") selected @endif value="Analisis">Analisis</option>
                                        <option @if ($history->status == "Penyelesaian") selected @endif value="Penyelesaian">Penyelesaian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('history.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
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
