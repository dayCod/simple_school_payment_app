@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Kelas') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

               <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">
  Create
  <i class="fa fa-plus-circle"></i>
</button>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="{{ route('asClass.store') }}" method="post">@csrf

  <div class="form-group">
    <input type="text" name="id_kelas" class="form-control" autocomplete="off" placeholder="Nomor Kelas..">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="kelas" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas.." autocomplete="off" required autofocus>
  </div>

  <div class="form-group">
    <select name="jurusan" class="form-control">
      <option hidden="on">Pilih Opsi Berikut</option>
      <optgroup label="A-1">
      <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
      <option value="Multimedia">Multimedia</option>
      <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
      </optgroup>

      <optgroup label="A-2">
        <option value="Perbankan Syariah">Perbankan Syariah</option>
        <option value="Akuntansi Lembaga Keuangan">Akuntansi Lembaga Keuangan</option>
        <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
        <option value="Tata Busana">Tata Busana</option>
        <option value="Bisnis Daring Pemasaran">Bisnis Daring Pemasaran</option>
      </optgroup>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
<br><br>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead align="center">
                  <tr>
                  	<th align="center">no</th>
                    <th align="center">kelas</th>
                    <th align="center">Jurusan</th>
                    <th align="center">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $dt)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td> {{ $dt->kelas }} </td>
                    <td> {{ $dt->jurusan }} </td>
                    <td>
                    	<center>
	                    	<div class="btn-group">
	                    		<a href="{{ action('crudDataKelasController@edit',$dt['id_kelas']) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                          <a href="{{ action('crudDataKelasController@destroy',$dt['id_kelas']) }}" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash"></i></a>
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