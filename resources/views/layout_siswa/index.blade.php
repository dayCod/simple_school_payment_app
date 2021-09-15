<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Siswa Page</title>

  <!-- Buat Notif iziToast -->
  <link href="{{ asset('iziToast-master/dist/css/iziToast.css') }}" rel="stylesheet">
  <script src="{{ asset('iziToast-master/dist/js/iziToast.js') }}"></script>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/css/login.css') }}">

  {{-- Sweet Alert --}}
  <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css') }}">

  <!-- Custom Fonts -->
  <link href="{{ asset('landingpage/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{ asset('landingpage/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('landingpage/css/stylish-portfolio.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/css/stylish-portfolio.css') }}" rel="stylesheet">

  <style>
    .ini-tombol{
    background: rgb(241, 175, 65);
    }

    .ini-tombol:hover{
    background: rgba(241, 176, 65, 0.767);
    }
  
    .ini-tombol2{
    background: rgb(241, 175, 65);
    }

    .ini-tombol2:hover{
    background: rgba(241, 176, 65, 0.767);
    }

    .ini-tombol3{
    background: rgb(241, 175, 65);
    }
    
    .ini-tombol3:hover{
    background: rgba(241, 176, 65, 0.767);
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Menu</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#data">Data Siswa</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#histori">Histori Pembayaran</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#saran">Ingin Ajukan Saran?</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#logout">Log out ?</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1 text-white" style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.507);">Halaman Siswa</h1>
      <h3 class="mb-5 text-white" style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.507);">
        <em>Anda berada dalam halaman siswa, info selanjutnya klik tombol dibawah</em>
      </h3>
      <a class="btn btn-xl js-scroll-trigger ini-tombol2" href="#data">Klik saya :D</a><br><br>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-xl ini-tombol3" data-toggle="modal" data-target="#exampleModal">
  Ubah Password
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Ganti Password</h3>
        <form action="{{ route('updatepass') }}" method="post">@csrf
          <input type="hidden" name="nisn" value="{{ Auth::guard('web_siswa')->user()->nisn }}">
          <div class="form-group">
          <input type="text" name="password" class="form-control" placeholder="Ubah Password..">
          </div>
         <button class="btn btn-md btn-primary btn-block">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Services -->
  <section class="content-section text-white text-center" id="data" style="background: rgb(221, 172, 26)">
    <div class="container">
      <div class="content-section-heading">
        
        <h2 class="mb-5 text-white text-uppercase" style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.377)">Data {{ Auth::guard('web_siswa')->user()->nama }}</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-6 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3 bg-primary">
            <b style="color: white">NISN</b>
          </span>
          <h4>
            <strong>{{ Auth::guard('web_siswa')->user()->nisn }}</strong><br>
          </h4>
          <p class="text-faded mb-0"></p>
        </div>
        <div class="col-lg-3 col-md-6 mb-6 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3 bg-primary">
            <b style="color: white">NIS</b>
          </span>
          <h4>
            <strong>{{ Auth::guard('web_siswa')->user()->nis }}</strong>
          </h4>
          <p class="text-faded mb-0"></p>
        </div>
        <div class="col-lg-3 col-md-6 mb-6 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3 bg-primary">
            <b style="color: white">$</b>
          </span>
          <h4>
            <strong>{{ Auth::guard('web_siswa')->user()->created_at->format('Ymds') }}</strong><br>
          </h4>
          <p class="text-faded mb-0"></p>
        </div>
        <div class="col-lg-3 col-md-6 mb-6 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3  bg-primary">
            <b style="color: white">SPP</b>
          </span>
          <h4>
            <strong>{{ Auth::guard('web_siswa')->user()->created_at->format('Ymddhs') }}</strong><br>
          </h4>
          <p class="text-faded mb-0"></p>
        </div>
        <div class="col-lg-3 col-md-6 mb-6 mb-md-0 mt-5">
          <span class="service-icon rounded-circle mx-auto mb-4 bg-primary">
            <i class="icon-user" style="color: white"></i>
          </span>
          <h4>
            <strong>{{ Auth::guard('web_siswa')->user()->nama }}</strong>
          </h4>
          <p class="text-faded mb-0">
            
            </p>
        </div>
        <div class="col-lg-3 col-mb-6 col-md-6 mt-5">
          <span class="service-icon rounded-circle mx-auto mb-4 bg-primary">
            <i class="fa fa-book" style="color: white"></i>
          </span>
          <h4>
            <strong>{{ Auth::guard('web_siswa')->user()->detailclass->kelas }}</strong>
          </h4>
          <p class="text-faded mb-0"></p>
        </div>
      </div>
    </div>
  </section>
 

  <!-- Callout -->
  <section class="callout" id="histori">
    <div class="container text-center">
      <h2 class="mx-auto mb-5" style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.295); color: white">Cek Histori
        <em style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.295)">anda {{ Auth::guard('web_siswa')->user()->nama }}</em>
        </h2>
       <button type="button" class="btn btn-xl ini-tombol" style="width: 250px" data-toggle="modal" data-target="#classModal">
  Cek Histori
</button>

<div id="classModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Data {{ Auth::guard('web_siswa')->user()->nama }}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          ×
        </button>
         
            
      </div>
      <div class="modal-body">
        <table id="classTable" class="table table-bordered">
          <thead>
          <th>no</th>
          <th>bulan - sampai bulan</th>
          <th>no. pembayaran</th>
          <th>tanggal bayar</th>
          <th>jumlah</th>
          <th>status</th>
          </thead>
          <tbody>
            @foreach($data as $d)
            @if($d->is_payed == '0')
            <tr>
            </tr>
            @elseif($d->is_payed == '1')
            <tr>
              <td>{{ $loop->index+1 }}</td>
              @if($d->bulan_dibayar == $d->sampai_bulan)
              <td> {{ $d->bulan_dibayar }}</td>
              @elseif($d->bulan_dibayar != $d->sampai_bulan)
              <td>{{ $d->bulan_dibayar }} - {{ $d->sampai_bulan }}</td>
              @endif
              <td> {{ Carbon\Carbon::parse($d->created_at)->format('Ymds') }}</td>
              <td> {{ $d->tgl_bayar }} </td>
              <td>{{ $d->jumlah_dibayar }}</td>
              @if($d->is_payed == '0')
              <td>Pending</td>
              @elseif($d->is_payed == '1')
              <td>Lunas</td>
              @endif
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

  </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="saran">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">form</h3>
        <h2 class="mb-5">Pengajuan Saran</h2>
      </div>
      <div class="row no-gutters">
        <div class="kotak">
                   <form action="{{ route('buatSaran') }}" method="POST">@csrf
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="contoh: peningkatan fasilitas">
              </div>
              <div class="form-group mb-4">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" placeholder="Isi saran disini.." rows="7" name="deskripsi"></textarea>
              </div>
              <input type="hidden" name="nisn">
              <input type="hidden" name="status" value="0">
              <button class="btn btn-block login-btn" id="kirim" name="kirim">Kirim</button>
            </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white" id="logout">
    <div class="container text-center">
      <h2 class="mb-4">Logout Siswa <i class="fa fa-user-circle"></i></h2>
      <caption class="text-white">Untuk Logout Bisa Klik Tombol Dibawah Terima Kasih</caption><br><br> 
      <a type="button" href="{{ route('logout_siswa') }}" class="btn btn-xl btn-warning mr-2 btn-logout" style="width: 250px;">Log out!</a>
    </div>
  </section>

  <!-- Map -->



  <!-- Scroll kebawah-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- ini bustrap javascript -->
  <script src="{{ asset('landingpage/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/modules-sweetalert.js') }}"></script>
  {{-- Sweet Alert --}}
  {{-- <script>
      $(document).ready( function() {
        $('.btn-logout').on('click', function(e){
          e.preventDefault();
          var href = $(this).attr('href');
          swal({
                title: "Yakin Logout ?",
                text: "Setelah logout anda diarahkan ke page login siswa!", 
                icon: "warning",
                buttons: true,
                dangerMode: true,
                closeOnConfirm: true,
            })
            .then((result) => {
              if (result===true) {
                $('#logout-action').attr('action', href).submit();
              }
            });
        })
      })
  </script> --}}
  

  <!-- notif dari iziToast -->
  @if(session('message'))
<script>

iziToast.success({
    title: 'Berhasil',
    message: "{{ session('message') }}",
    position : "topRight",
});

</script>
@elseif(session('error'))
<script>

iziToast.error({
    title: '',
    message: "{{ session('error') }}",
    position : "topRight",
});

</script>
@endif

@if($errors->any())
@foreach($errors->all() as $error)
<script>

iziToast.error({
    title: 'Whoops!',
    message: "{{ $error }}",
    position : "topRight",
});

</script>
@endforeach
@endif

  <!-- Plugin JavaScript -->
  <script src="{{ asset('landingpage/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('landingpage/js/stylish-portfolio.min.js') }}"></script>

</body>

</html>
