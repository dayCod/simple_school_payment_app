@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Spp') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="{{ route('asSpp.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a></br>
            <br>
            <form action="{{ route('asSpp.update',$update) }}" method="POST">@csrf @method('patch')

              <div class="form-group">
              	<label class="control-label">tahun</label>
              	<input type="text" class="form-control" value="{{ $update->tahun }}" name="tahun">
              </div>

              <div class="form-group">
                <label class="control-label">nominal</label>
                <input type="text" class="form-control" value="{{ number_format($update->nominal) }}" name="nominal">
              </div>

              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection