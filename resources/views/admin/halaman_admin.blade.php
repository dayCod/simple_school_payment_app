@extends('layout_admin.main')
@section('contents')
@section('title','Dashboard Admin') 
   
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <div class="row ml-1">
                 <div class="col-md-3 col-lg-4">
                      <div class="widget-small bg-info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                        <div class="info">
                          <h4>Total Siswa</h4>
                          <p><b>{{ $totalSiswa }}</b></p>
                        </div>
                      </div>
                    </div>

                     <div class="col-md-3 col-lg-4">
                          <div class="widget-small bg-info coloured-icon"><i class="icon fa fa-book fa-3x"></i>
                            <div class="info">
                              <h4>Total Kelas</h4>
                              <p><b>{{ $totalKelas }}</b></p>
                            </div>
                          </div>
                        </div>

                         <div class="col-md-3 col-lg-4">
                          <div class="widget-small bg-info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                            <div class="info">
                              <h4>Total Petugas</h4>
                              <p><b>{{ $totalPetugas }}</b></p>
                            </div>
                          </div>
                      </div>
                        </div>
                        <div class="row ml-1">
                            <div class="col-md-3 col-lg-4">
                                <div class="widget-small bg-info coloured-icon"><i class="icon fa fa-money fa-3x"></i>
                                    <div class="info">
                                      <h4>Pemasukan Hari Ini</h4>
                                      <p><b>Rp. {{ number_format($forToday) }}</b></p>
                                </div>
                          </div>
                            </div>

                             <div class="col-md-3 col-lg-4">
                                <div class="widget-small bg-info coloured-icon"><i class="icon fa fa-envelope fa-3x"></i>
                                    <div class="info">
                                      <h4>Total Saran </h4>
                                      <p><b>{{ $totalSaran }}</b></p>
                                </div>
                          </div>
                            </div>

                            <div class="col-md-3 col-lg-4">
                                <div class="widget-small bg-info coloured-icon"><i class="icon fa fa-money fa-3x"></i>
                                    <div class="info">
                                      <h4>Jumlah Semua Pemasukan</h4>
                                      <p><b>Rp. {{number_format($forAll)}}</b></p>
                                </div>
                          </div>
                            </div>
                        </div>
                <!-- TOP MENUS -->
            <div class="container">
  <div class="row">
    <!-- Top Menu -->
  
    <!-- Bot -->
    <div class="col-sm">
         <div class="card" style="width: 18rem;">
  <img src="{{ asset('bill.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
     <div class="card-title"> 
    <p class="text-center"> <b>Jumlah orang yang menunggak</b></p>
  </div>
    <p class="card-text">Berikut adalah data detail dari siswa yang belum lunas atau masih menunggak <i class="fa fa-arrow-down"></i></p>
    <!-- Button trigger modal -->
<button type="button" class="btn-block btn btn-primary" data-toggle="modal" data-target="#modal1">
  Detail
</button><center>-</center>
<button type="button" class="btn btn-primary btn-block">
  Jumlah siswa yang Menunggak <span class="badge badge-light">{{ $count }}</span>
</button><center>-</center>
<!-- Modal #modal1 -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data Siswa Yang Menunggak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detail as $d)
                <tr>
                    <td>{{ $d->nisn }}</td>
                    <td>{{ $d->student->nis }}</td>
                    <td>{{ $d->student->nama }}</td>
                    <td> {{ $d->class->kelas }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    </div>
    <div class="col-sm">
      <div id="container" style="width: 550px;"></div>
    </div>
  </div>
</div><p style="margin-left: 12px;">================================================================================================================</p>

                <!-- Profil -->
                <h3 style="margin-left: 11px;">Profil </h3>
                <table class="table table-borderless">
                    <thead>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Nama : </th>
                        <td>{{ Auth()->user()->nama_petugas }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Username : </th>
                        <td>{{ Auth()->user()->username }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Level : </th>
                        <td>{{ Auth()->user()->level }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <!--END PROFILE  -->


</div>
</div>
</div>
</div>      

@endsection


@section('highcharts')
<script type="text/javascript">
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Data Siswa Telah Lunas Tahun Ini'
    },
    xAxis: {
        categories: {!! json_encode($categories) !!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },

    credits: {
        enabled: false
    },

    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true,
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: {!! json_encode($categories) !!},
        data: {!! json_encode($values) !!}

    }]
});
</script>
@endsection     

