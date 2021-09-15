@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Pembayaran') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
  Create
  <i class="fa fa-plus-circle"></i>
</button>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Data Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="{{ route('asPembayaran.store') }}" method="post">@csrf 
          <div class="form-group">
            Pilih Siswa :
            <select multiple id="list" class="js-example-basic-single form-control" name="nisn" style="width: 100%;">
              @foreach($siswa as $s)
              <option value="{{ $s->nisn }}">{{ $s->nisn }} || {{ $s->nama }} || {{ $s->detailclass->kelas }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <select class="js-example-basic-single form-control" id="list" name="id_kelas">
              <option hidden="on">== Pilih Kelas ==</option>
              @foreach($kelas as $k)
              <option value="{{ $k->id_kelas }}">{{ $k->kelas }}</option>
              @endforeach
            </select>
          </div>
  
  <div class="form-group">
    <input type="date" name="tgl_bayar" class="form-control">
  </div>

  <div class="form-group">
    <select class="form-control" name="bulan_dibayar">
      <!-- <option hidden="on">Select a Class</option> -->
      <option value="" hidden selected>== Pilih Bulan ==</option>
   
      <option value="Januari">Januari</option>
      <option value="Februari">Februari</option>
      <option value="Maret">Maret</option>
      <option value="April">April</option>
      <option value="Mei">Mei</option>
      <option value="Juni">Juni</option>
      <option value="Juli">Juli</option>
      <option value="Agustus">Agustus</option>
      <option value="September">September</option>
      <option value="Oktober">Oktober</option>
      <option value="November">November</option>
      <option value="Desember">Desember</option>

    </select>
  </div>

  <div class="form-group">
    <select class="form-control" name="sampai_bulan">
      <!-- <option hidden="on">Select a Class</option> -->
      <option value="" hidden selected>== Sampai Bulan ==</option>
   
      <option value="Januari">Januari</option>
      <option value="Februari">Februari</option>
      <option value="Maret">Maret</option>
      <option value="April">April</option>
      <option value="Mei">Mei</option>
      <option value="Juni">Juni</option>
      <option value="Juli">Juli</option>
      <option value="Agustus">Agustus</option>
      <option value="September">September</option>
      <option value="Oktober">Oktober</option>
      <option value="November">November</option>
      <option value="Desember">Desember</option>

    </select>
  </div>


  <div class="form-group">
    <input type="number" class="form-control" name="tahun_dibayar" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun.." autocomplete="off" required autofocus>
  </div>

  <div class="form-group">
    <select name="jumlah_dibayar" class="form-control">
      <option value="" hidden="on">== Pilih Nominal ==</option>
      @foreach($spp as $s)
      <option value="{{ $s->nominal }}">{{ $s->nominal }}</option>
      @endforeach
    </select>
  </div>

  <select name="is_payed" style="display: none;">
    <option value="0">0</option>
  </select>

  <input type="hidden" name="id_petugas">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
            </br>
            <br>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  	<th>no</th>
                    <th>nisn</th>
                    <th>nama</th>
                    <th>kelas</th>
                    <th>bulan</th>
                    <th>sampai bulan</th>
                    <th>tanggal</th>
                    <th>jumlah</th>
                    <th>status</th>
                    <th>action</th>
                  </tr>
                </thead> 
                <tbody>
                  @foreach($data as $d)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $d->nisn }}</td>
                    <td>{{ $d->student->nama }}</td>
                    <td>{{ $d->class->kelas }}</td>
                    <td>{{ $d->bulan_dibayar }}</td>
                    @if($d->bulan_dibayar == $d->sampai_bulan)
                    <td>-</td>
                    @elseif($d->bulan_dibayar != $d->sampai_bulan)
                    <td>{{ $d->sampai_bulan }}</td>
                    @endif
                    <td>{{ $d->created_at->format('d M Y') }}</td>
                    <td>Rp. {{ number_format($d->jumlah_dibayar) }}</td>
                    @if($d->is_payed == '0')
                    <td align="center"><span class="badge badge-danger">Belum Dibayar</span></td>
                    @elseif($d->is_payed == '1')
                    <td align="center"><span class="badge badge-success">Lunas</span></td>
                    @endif
                    <td>
                    	<center>
	                    	<div class="btn-group">
	                    		<a href="{{ action('pembayaranController@edit', $d['id_pembayaran']) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                          <a href="{{ action('pembayaranController@destroy', $d['id_pembayaran']) }}" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash"></i></a>
                           
	                    	</div>
                    	</center>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><hr>
              <p></p>
            </div>
          </div>
        </div>
      </div>
@endsection