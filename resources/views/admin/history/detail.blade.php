@extends('layout_petugas.main')
@section('contents')
@section('title','Histori Pembayaran') 
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

            	<a href="{{ route('asHistory.index') }}" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"><b> Kembali</b></i></a>
            	<br><br>

            	
           	<table class="table table-borderless">
                    
                    <thead>
                        <tr>
                            <th scope="row">NISN</th>
                        @if(!empty($update->nisn))  
                            <td>{{ $update->nisn }}</td>
                        @else
                            <td></td>
                        @endif
                        </tr>
                        <tr>
                            <th scope="row">NIS</th>
                        @if(!empty($update->student->nis))  
                            <td>{{ $update->student->nis }}</td>
                        @else
                            <td></td>
                        @endif    
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                        @if(!empty($update->student->nama))
                            <td>{{ $update->student->nama }}</td>
                        @else
                            <td></td>
                        @endif
                        </tr>
                        <tr>
                            <th scope="row">Kelas</th>
                        @if(!empty($update->class->kelas))
                            <td>{{ $update->class->kelas }}</td>
                        @else
                            <td></td>
                        @endif
                        </tr>
                    </thead>
                    
                </table>
                <b><hr style="display: block;"></b><br>
                @if(!empty($update->student->nama))
                <h2>Data Pembayaran  {{ $update->student->nama }}</h2>
                @else
                <h2>Data Pembayaran</h2>
                @endif

                @if(!empty($update->student->nama))
  <p class="text-muted">== Berikut adalah data lengkap pembayaran {{ $update->student->nama }} dari kelas {{ $update->class->kelas }} ==</p>
                @else
  <p class="text-muted">== Berikut adalah data lengkap pembayaran  ==</p>  
                @endif
                
                <table class="table table-hover table-bordered" id="sampleTable">
                <thead align="center">
                  <tr>
                    <th align="center">no</th>
                    <th align="center">bulan - sampai bulan</th>
                    <th align="center">no. pembayaran</th>
                    <th align="center">tanggal bayar</th>
                    <th align="center">jumlah</th>
                    <th align="center">status</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    @if($d->is_payed == '0')
                    <!-- data ksong -->
                    @elseif($d->is_payed == '1')
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    @if($d->bulan_dibayar == $d->sampai_bulan)
                    <td align="center">{{ $d->bulan_dibayar }}</td>
                    @elseif($d->bulan_dibayar != $d->sampai_bulan)
                    <td>{{ $d->bulan_dibayar }} - {{ $d->sampai_bulan }}</td>
                    @endif
                    <td>{{ $d->created_at->format('Ymds') }}</td>
                    <td>{{ $d->tgl_bayar }}</td>
                    <td>Rp. {{ number_format($d->jumlah_dibayar) }}</td>
                    <td align="center"><span class="badge badge-success">Lunas</span></td>
                  </tr>
                  @endif
             @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
</div>

@endsection