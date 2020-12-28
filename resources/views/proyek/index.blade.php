@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Proyek</h2>  
            </div>
        </div>
         <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('proyek.create') }}"> <i class="fa fa-plus" style="color: white;"></i> Proyek</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Proyek</th>
                                <th>Nama Proyek</th>
                                <th>Deatline Proyek</th>
                                <th>Stakeholder</th>
                                <th>Penaggung Jawab</th>
                                <th>Status</th>
                                <th width="150px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $key => $project)
                            <tr>
                                <td>{{ $project->id}}</td>
                                <td>{{ $project->nama}}</td>
                                <td>{{ $project->deatline}}</td>
                                <td>{{ $project->stakeholder}}</td>
                                <td>{{ $project->karyawan->nama}}</td>
                                <td>{{ $project->status}}</td>
                                <td>
                                    <form action="{{ route('proyek.destroy',$project->id) }}" method="POST">
                        
                                        <a class="btn btn-primary btn-sm" title="Edit" href="{{ route('proyek.edit',$project->id) }}">
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
