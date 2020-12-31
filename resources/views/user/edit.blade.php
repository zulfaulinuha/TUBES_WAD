@extends('layouts.app_test')

@section('content')
<div id="page-wrapper" style="min-height: 570px;">
    <div id="page-inner" style="min-height: 0px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Profile</h2>   
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Form Edit</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('user.update',$user->id) }}" >
                            @csrf 
                            @method('PUT')
    
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label><strong>Username</strong></label>
                                    <input type="text" class="form-control" placeholder="Username" name="name" value="{{$user->name}}" required>
                                    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label><strong>Email</strong></label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('user.index') }}" class="btn btn-warning" title="Back"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary" title="Simpan"><i class="fa fa-floppy-o"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
