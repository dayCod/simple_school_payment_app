@extends('layout_admin.main')
@section('contents')
@section('title','Kritik dan Saran') 

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
           
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  	<th>no</th>
                    <th>judul</th>
                    <th>deskripsi</th>
                    <th>terbuat_pada</th>
                    <th>status</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($send as $s)
                  <tr>
                    <td align="center">{{ $loop->index+1 }}</td>
                    <td>{{ $s->judul }}</td>
                    <td>{{ $s->deskripsi }}</td>
                    <td>{{ $s->created_at->format('d M Y') }}</td>
                    @if($s->status == '1')
                    <td>Approved</td>
                    @elseif($s->status == '0')
                    <td>
                    	<center>
	                    	<div class="btn-group">
	                    	  <form action="{{ route('asSaran.update', $s['id_saran']) }}" method="post">@csrf @method('PUT')
                            <button class="btn btn-success btn-sm "><i class="fa fa-check"></i></button>
                          </form> 
                          <form action="{{ route('asSaran.destroy', $s['id_saran']) }}" method="post">@csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm "><i class="fa fa-ban"></i></button>
                          </form>                           
	                    	</div>
                    	</center>
                    </td>
                    @endif
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