@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Laporan</h2>  
            </div>
        </div>
         <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                @auth
                    @if (Auth::user()->status == "admin")
                        <a class="btn btn-primary" href="{{ route('laporan.create') }}"> <i class="fa fa-plus" style="color: white;"></i> Laporan</a>
                    @endif
                @endauth
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Laporan</th>
                                <th>Nama Laporan</th>
                                <th>Date From</th>
                                <th>Date To</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporans as $key => $laporan)
                            <tr>
                                <td>{{ $laporan->id }}</td>
                                <td>{{ $laporan->nama}}</td>
                                <td>{{ $laporan->date_from}}</td>
                                <td>{{ $laporan->date_to}}</td>
                                <td>
                                    <form action="{{ route('laporan.destroy',$laporan->id) }}" method="POST">
    
                                        <a class="btn btn-info btn-sm" title="Show" href="{{ route('laporan.show',$laporan->id) }}">
                                            <i class="fa fa-print" style="color: white;"></i> Print
                                        </a>
                    
                                        @auth
                                            @if (Auth::user()->status == "admin")
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            @endif
                                        @endauth
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
