<!DOCTYPE html>
<html lang="en">
  <head> 
    <link rel="shortcut icon" href="iconweb.png">
    <title>School Payment App</title>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- end -->
    <!-- SCRIPT CHART CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
    <script src="{{ asset('js/highcharts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>
    <!-- ENDSCRIPT CDN -->
    <!-- lodash -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js">
   <!-- select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('select2-4.0.13/dist/css/select2.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('select2-4.0.13/dist/css/select2.css') }}">
    <script type="text/javascript">
     
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" type="text/javascript"></script>
    <script src="{{ asset('select2-4.0.13/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('select2-4.0.13/dist/js/select2.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
   <!-- end -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.sccs') }}">
    <!-- Font-icon css-->
    <link href="{{ asset('iziToast-master/dist/css/iziToast.css') }}" rel="stylesheet">
    <script src="{{ asset('iziToast-master/dist/js/iziToast.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha256-qvCL5q5O0hEpOm1CgOLQUuHzMusAZqDcAZL9ijqfOdI=" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
     <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css') }}">
     @include('alert.main')
     @include('alert.main2')
     <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
     
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('layout_admin.header')

    <main class="app-content">
      <div class="app-title">
   		  @yield('title')
      </div>
      @yield('contents')
     </main>

    @include('layout_admin.sidebar')
  
    
    <!-- Essential javascripts for application to work-->
    <!-- lodash -->

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

    <!-- lodash -->
    <script src="jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('js/plugins/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>

    @yield('highcharts')

    {{-- <script>
    $(document).ready(function(){
        $('.delete-btn').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            swal({
                title: "Hapus data ?",
                text: "Data yang di hapus tidak dapat di kembalikan!", 
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                $('#delete-form').attr('action',href).submit();
              }
            });
        });
    });
</script> --}}


    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/modules-sweetalert.js') }}"></script>
<!-- select2js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" type="text/javascript"></script>
   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList table").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script src="{{ asset('select2-4.0.13/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('select2-4.0.13/dist/js/select2.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<!-- end -->
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
      $(document).ready(function()
      {
        $("#list").select2();
      });
  

         
    </script>

     
  </body>
</html>