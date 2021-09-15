@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Kelas') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="{{ route('asClass.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a></br>
            <br>
            <form action="{{ action('crudDataKelasController@update',$update) }}" method="POST">
               @method('PUT')@csrf
               <input type="hidden" name="id_kelas">
              <div class="form-group">
              	<label class="control-label">Kelas</label>
              	<input type="text" class="form-control" value="{{ $update->kelas }}" name="kelas">
              </div>

              <div class="form-group">
              	<label class="control-label">Jurusan</label>
              	<select name="jurusan" class="form-control">
                  <optgroup label="A-1">
                  <option value="Rekayasa Perangkat Lunak" @if( $update->jurusan == "Rekayasa Perangkat Lunak" ) selected @endif>Rekayasa Perangkat Lunak</option>
                  <option value="Multimedia" @if($update->jurusan == "Multimedia") selected @endif>Multimedia</option>
                  <option value="Teknik Komputer dan Jaringan" @if($update->jurusan == "Teknik Komputer dan Jaringan") selected @endif>Teknik Komputer dan Jaringan</option>
                  </optgroup>
                  <optgroup label="A-2">
                  <option value="Perbankan Syariah" @if($update->jurusan == "Perbankan Syariah") selected @endif>Perbankan Syariah</option>
                  <option value="Akuntansi Lembaga Keuangan" @if($update->jurusan =="Akuntansi Lembaga Keuangan") selected @endif>Akuntansi Lembaga Keuangan</option>
                  <option value="Otomatisasi Tata Kelola Perkantoran" @if($update->jurusan=="Otomatisasi Tata Kelola Perkantoran") selected @endif>Otomatisasi Tata Kelola Perkantoran</option>
                  <option value="Tata Busana" @if($update->jurusan=="Tata Busana") selected @endif>Tata Busana</option>
                  <option value="Bisnis Daring Pemasaran" @if($update->jurusan=="Bisnis Daring Pemasaran") selected @endif>Bisnis Daring Pemasaran</option>
                  </optgroup>
                </select>
              </div>
              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>

        </div>
      </div>
@endsection