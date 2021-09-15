@extends('layout_petugas.main')
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
                    <th>read</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $s)
                @if($s->status == '0')
                <!-- jika status bernilai 0/belum di approve maka no record -->
                @elseif($s->status == '1')
                  <tr>
                    <td align="center">{{ $loop->index+1 }}</td>
                    <td>{{ $s->judul }}</td>
                    <td>{{ $s->deskripsi }}</td>
                    <td>{{ $s->created_at->format('d M Y') }}</td>
                    <td>
                      <form method="POST" action="{{ route('asSaranP.destroy', $s['id_saran']) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endif
                @endforeach
                </tbody>
              </table><hr>
              <p></p>
            </div>
          </div>
        </div>
      </div>
@endsection