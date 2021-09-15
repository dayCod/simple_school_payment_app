<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('form/style.css') }}">
  <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
  <link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <title>Create Acc Admin</title>
</head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="container">
      <section class="login-form" style="margin-top: 160px;">
    <form method="post" action="{{ route('regAdmin') }}" role="login">
      <h3><b>SPP App </b>-  regist</h3>
      <div class="row">
        <div class="col-xs-12">
          <input type="text" name="username" placeholder="Username..." autocomplete="off" required class="form-control input-lg" />
          <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="col-xs-12">
          <input type="password" name="password" placeholder="Password..." required class="form-control input-lg" />
          <span class="glyphicon glyphicon-lock"></span>
        </div>
        <div class="col-xs-12">
          <input type="text" name="nama_petugas" placeholder="Nama Petugas..." required class="form-control input-lg" />
          <span class="glyphicon glyphicon-user"></span>
        </div>
        <div class="col-xs-12" style="display: none;">
          <select name="level">
            <option value="admin">admin</option>
          </select>
        </div>
      </div>
      <button type="submit" name="go" class="btn btn-md btn-block btn-success">SIGNUP</button>
    </form>
    </section>
  </section>
  
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>