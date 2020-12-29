@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Admin</h2>  
            </div>
        </div>
         <!-- /. ROW  -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('user.create') }}"> <i class="fa fa-plus" style="color: white;"></i> User</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Tipe User</th>
                                <th>Nama Karyawan</th>
                                <th width="125px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->status}}</td>
                                <td>{{ $user->karyawan->nama}}</td>
                                <td>
                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        
                                        <a class="btn btn-primary btn-sm" title="Edit" href="{{ route('user.edit',$user->id) }}">
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
