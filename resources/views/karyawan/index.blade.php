@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Karyawan</h2>  
            </div>
        </div>
         <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('karyawan.create') }}"> <i class="fa fa-plus" style="color: white;"></i> Karyawan</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th width="125px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $key => $employee)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $employee->nama}}</td>
                                <td>
                                    <form action="{{ route('karyawan.destroy',$employee->id) }}" method="POST">
    
                                        <a class="btn btn-info btn-sm" title="Show" href="{{ route('karyawan.show',$employee->id) }}">
                                        <i class="fa fa-info-circle" style="color: white;"></i>
                                        </a>
                        
                                        <a class="btn btn-primary btn-sm" title="Edit" href="{{ route('karyawan.edit',$employee->id) }}">
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
