@extends('layout_admin.main')
@section('contents')
@section('title','CRUD Data Siswa') 

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
        <h5 class="modal-title" id="exampleModalLabel">Create Account Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="{{ route('asSiswa.store') }}" method="post">@csrf
  <div class="form-group">
    <input type="text" class="form-control" name="nisn" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nisn.." autocomplete="off" required autofocus>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="nis" placeholder="Nis.." autocomplete="off" required autofocus>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Nama.." autocomplete="off" required autofocus>
  </div>
  <div class="form-group">
    <span class="text-muted"><textarea name="alamat" class="form-control" placeholder="alamat.." rows="3"></textarea></span>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" name="no_telp" placeholder="No. Telp" autocomplete="off" required autofocus>
  </div>

  <div class="form-group">
    <select multiple id="list" class="js-example-basic-single form-control" name="id_kelas" style="width: 100%">
      <option hidden="on">Select a Class</option>
      @foreach ($buat as $bt)
      <option value="{{ $bt->id_kelas }}">{{ $bt->kelas }}</option>
      @endforeach
    </select>
  </div>
  <input type="hidden" name="password">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<br>
<br>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  	<th>no</th>
                  	<th>nisn</th>
                  	<th>nis</th>
                  	<th>nama</th>
                    <th>alamat</th>
                    <th>no telp</th>
                    <th>kelas</th>
                    <th>no spp</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $dt)
                  <tr>
                    <td align="center">{{ $loop->index+1 }}</td>
                    <td>{{ $dt->nisn }}</td>
                    <td>{{ $dt->nis }}</td>
                    <td> {{ $dt->nama }} </td>
                    <td> {{ $dt->alamat }} </td>
                    <td> {{ $dt->no_telp }} </td>
                    <td>{{$dt->detailclass->kelas}}</td>
                    <td>{{ $dt->updated_at->format('ymddhs') }}</td>
                    
                    <td>
                    	<center>
	                    	<div class="btn-group">
	                    		<a href="{{ action('crudDataSiswaController@edit', $dt['nisn']) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
	                    		<a href="{{ action('crudDataSiswaController@destroy', $dt['nisn']) }}" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash"></i></a>
	                    	</div>
                    	</center>
                    </td>
                  </tr>
         @endforeach
                </tbody>
              </table>
              
              <hr>
              <p></p>
            </div>
          </div>
        </div>
      </div>

@endsection