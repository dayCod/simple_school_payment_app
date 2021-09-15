@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Siswa') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="{{ route('asSiswa.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a></br>
            <br>
            <form action="{{ route('asSiswa.update', $update) }}" method="POST" enctype="multipart/form-data">
              @csrf @method('patch')
              <div class="form-group">
              	<label class="control-label">Nisn</label>
              	<input type="text" class="form-control" value="{{ $update->nisn }}" name="nisn">
              </div>

              <div class="form-group">
              	<label class="control-label">Nis</label>
              	<input type="text" class="form-control" value="{{ $update->nis }}" name="nis">
              </div>

              <div class="form-group">
                <label class="control-label">Nama</label>
                <input type="text" class="form-control" value="{{ $update->nama }}" name="nama">
              </div>
        
              <div class="form-group">
              	<label>Alamat</label>
              	<textarea class="form-control" name="alamat">{{ $update->alamat }}</textarea>
              </div>

              <div class="form-group"> 
                <label>No. Telp</label>
                <input type="number" class="form-control" value="{{ $update->no_telp }}" name="no_telp">
              </div>

              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection