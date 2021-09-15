@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Petugas') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="{{ route('asPetugas.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a></br>
            <br>
            <form action="{{ route('asPetugas.update',$update) }}" method="POST">@csrf @method('patch')
              <div class="form-group">
              	<label class="control-label">Username</label>
              	<input type="text" class="form-control" value="{{ $update->username }}" name="username">
              </div>

              <div class="form-group">
              	<label class="control-label">Password</label>
              	<input type="text" class="form-control" value="{{ $update->password }}" name="password">
              </div>

              <div class="form-group">
                <label class="control-label">Nama Petugas</label>
                <input type="text" class="form-control" value="{{ $update->nama_petugas }}" name="nama_petugas">
              </div>

              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection