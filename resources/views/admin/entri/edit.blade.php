@extends('layout_petugas.main')
@section('contents')
@section('title','CRUD Data Pembayaran') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="{{ route('asEntri.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a></br>
            <br>
            <form action="{{ route('asEntri.update',$update) }}" method="POST">@csrf @method('patch')
              <div class="form-group">
                <label class="control-label">bulan</label>
                <select class="form-control" name="bulan_dibayar">
                  <option value="Januari" @if($update->bulan_dibayar == "Januari") selected @endif >Januari</option>
                  <option value="Februari" @if($update->bulan_dibayar == "Februari") selected @endif>Februari</option>
                  <option value="Maret" @if($update->bulan_dibayar == "Maret") selected @endif>Maret</option>
                  <option value="April" @if($update->bulan_dibayar == "April") selected @endif>April</option>
                  <option value="Mei" @if($update->bulan_dibayar == "Mei") selected @endif>Mei</option>
                  <option value="Juni" @if($update->bulan_dibayar == "Juni") selected @endif>Juni</option>
                  <option value="Juli" @if($update->bulan_dibayar == "Juli") selected @endif>Juli</option>
                  <option value="Agustus" @if($update->bulan_dibayar == "Agustus") selected @endif>Agustus</option>
                  <option value="September" @if($update->bulan_dibayar == "September") selected @endif>September</option>
                  <option value="Oktober" @if($update->bulan_dibayar == "Oktober") selected @endif>Oktober</option>
                  <option value="November" @if($update->bulan_dibayar == "November") selected @endif>November</option>
                  <option value="Desember" @if($update->bulan_dibayar == "Desember") selected @endif>Desember</option>
                </select>
              </div>
              
              <div class="form-group">
                <label class="control-label">tanggal</label><br>
                <input type="date" name="tgl_bayar" value="{{ $update->tgl_bayar }}" style="width: 100%">
              </div>

              <div class="form-group">
              	<label class="control-label">jumlah</label>
              	<input type="text" class="form-control" value="{{ $update->jumlah_dibayar }}" name="jumlah_dibayar">
              </div>

              <div class="form-check">
                @if($update->is_payed == '0')
                <input type="checkbox" class="form-check-input" name="is_payed">
                @elseif($update->is_payed == '1')
                <input type="checkbox" class="form-check-input" name="is_payed" checked>
                @endif
                <label class="form-check-label">Status</label>
              </div>
<br>
              <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection