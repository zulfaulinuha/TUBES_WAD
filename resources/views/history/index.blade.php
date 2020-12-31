@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>History Proyek</h2>  
            </div>
        </div>
         <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('history.create') }}"> <i class="fa fa-plus" style="color: white;"></i> History Proyek</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID History</th>
                                <th>ID Proyek</th>
                                <th>Nama Proyek</th>
                                <th>Tanggal History</th>
                                <th>Status</th>
                                <th>Laporan</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($histores as $key => $history)
                            <tr>
                                <td>{{ $history->id}}</td>
                                <td>{{ $history->project_id}}</td>
                                <td>{{ $history->project->nama}}</td>
                                <td>{{ $history->tanggal}}</td>
                                <td>{{ $history->status}}</td>
                                <td>
                                    @if ($history->laporan === null)
                                        <h5>Tidak ada berkas</h5>
                                    @else
                                        <a class="btn btn-info btn-sm" href="{{ asset("storage/file/$history->project_id/$history->laporan")}}" target="_blank">
                                            <i class="fa fa-file-text" style="color: white;"></i> File
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('history.destroy',$history->id) }}" method="POST">
                        
                                        <a class="btn btn-primary btn-sm" title="Edit" href="{{ route('history.edit',$history->id) }}">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                        
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
