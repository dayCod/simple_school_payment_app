@extends('layout_petugas.main')
@section('contents')
@section('title','Histori Pembayaran') 
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

            	<h2>Filter Data Siswa</h2>
  <p>== Untuk mempermudah dalam pencarian data siswa ==</p>  
  
  
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead align="center">
                  <tr>
                    <th align="center">no</th>
                    <th align="center">NISN</th>
                    <th align="center">Nama</th>
                    <th align="center">Kelas</th>
                    <th align="center">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($nama as $n)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td> {{ $n->nisn }} </td>
                    <td> {{ $n->nama }} </td>
                    <td> {{ $n->detailclass->kelas }} </td>
                    <td>
                      <center>
                        <div class="btn-group">
                          <a href="{{ route('asHistory.edit', $n->nisn) }}" class="btn btn-sm btn-success"><i class="fa fa-info">- More Info</i></a>
                        </div>
                      </center>
                    </td>
                  </tr>
                @endforeach

                </tbody>
              </table>

</div>
</div>
</div>
</div>

@section('lodash')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>
@endsection
@endsection