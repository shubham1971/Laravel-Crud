<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

       <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->
   
    
   
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     
     <link href="{{asset('project/public/admin/css/material-dashboard.css')}}" rel="stylesheet" />
</head>
<body>
    
 <div class="wrapper">
     
   @include('layouts.inc.sidebar')

   <div class="main-panel">
       @include('layouts.inc.adminnav')

       <div class="content">
           @yield('content')
       </div>

       @include('layouts.inc.adminfooter')
   </div>

 </div>











    <!-- Scripts -->

     <!--   Core JS Files   -->

  <script src="{{ asset('project/public/admin/js/jquery.min.js') }}" defer></script>
  <script src="{{ asset('project/public/admin/js/popper.min.js') }}" defer></script>
  <script src="{{ asset('project/public/admin/js/bootstrap-material-design.min.js') }}" defer></script>
  <script src="{{ asset('project/public/admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @if(session('status'))
  <script>
    swal("{{session('status')}}");
  </script>
  @endif


  
@yield('script')
 
</body>
</html>
