<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Siswa</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('landingpage/css/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link href="{{ asset('iziToast-master/dist/css/iziToast.css') }}" rel="stylesheet">
  <script src="{{ asset('iziToast-master/dist/js/iziToast.js') }}"></script>
  <script src="{{ asset('iziToast-master/dist/js/iziToast.min.js') }}"></script>
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="{{asset('log/css/login.css')}}">

  <style>
    .tombol-login {
    padding: 13px 20px;
    background-color: rgb(1, 153, 221);
    border-radius: 0;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 14px;
    }
    
    .tombol-login:hover {
      border: 1px solid #17a2b8;
      background-color: #f3efef;
      color: #17a2b8; 
    }

    .kotak{
      position: relative;
    }

    .kotak h1{
      position: absolute;
      bottom: 100px;
      right: 30px;
      text-shadow: 2px 2px  2px rgba(0, 0, 0, 0.473);
      color: #fff;
      font-family: 'Lobster', cursive;
      font-size: 44pt;
    }

    .kotak p{
      position: absolute;
      bottom: 50px;
      right: 30px;
      font-size: 18pt;
      text-shadow: 2px 2px  2px rgba(0, 0, 0, 0.473);
      color: #fff;
      font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    
  </style>
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title" style="font-family: 'Lobster', cursive; font-size: 30pt; letter-spacing: 3px;">Log in</h1>
            <form action="{{ route('post') }}" method="post">@csrf
              <div class="form-group">
                <label for="nisn" style="font-weight: bold; color: black;">Nisn</label>
                <input type="text" name="nisn" id="nisn" class="form-control" placeholder="contoh:1122334455" autocomplete="off">
              </div>
              <div class="form-group mb-4">
                <label for="password" style="font-weight: bold; color: black;">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="masukin password disini" autocomplete="off">
                </div>

              <button class="btn btn-block tombol-login">Login</button>
            </form>

          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <div class="kotak">
          <img src="{{asset('log/images/portfolio-1.jpg')}}" alt="login image" class="login-img" style="padding: 0px;">
          <h1>SPP App</h1>
          <p>Aplikasi Pembayaran Spp</p>
        </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@if(session('message'))
<script>
  iziToast.success({
    title: 'Berhasil',
    message: "{{ session('message') }}",
    position: "topRight",
  });
</script>
@elseif(session('error'))
  <script>
    iziToast.error({
      title: 'Whoops!',
      message: "{{ session('error') }}",
      position: "topRight",
    });
  </script>
@endif
@if ($errors->any())
  @foreach ($errors->all() as $error)
    <script>
      iziToast.error({
        title: 'Whoops!',
        message: "{{ $error }}",
        position: "topRight",
      });
    </script>
  @endforeach

@endif
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  {{-- <script src="{{ asset('vue/dist/vue.js') }}"></script>
  <script src="{{ asset('vue/dist/vue.min.js') }}"></script>
  <script src="{{ asset('vuelidate/dist/vuelidate.min.js') }}"></script>
  <script src="{{ asset('vue/dist/console/app.js') }}"></script> --}}
</body>
</html>
