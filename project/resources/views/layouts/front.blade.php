<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    

       <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" >
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <link href="{{asset('project/public/frontend/css/bootstrap5.css')}}" rel="stylesheet" />
     <link href="{{asset('project/public/frontend/css/custom.css')}}" rel="stylesheet" />
     
      <link rel="stylesheet" href="{{asset('project/public/frontend/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('project/public/frontend/css/owl.theme.default.min.css')}}">

     

    
</head>
<body>

  @include('layouts.inc.frontnavbar')
    

       <div class="content">
           @yield('content')
       </div>












    <!-- Scripts -->

     <!--   Core JS Files   -->
   <script src="{{ asset('project/public/frontend/js/jquery-3.6.0.min.js') }}" defer></script>

 
  <script src="{{ asset('project/public/frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('project/public/frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('project/public/frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('project/public/frontend/js/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('project/public/frontend/js/perfect-scrollbar.jquery.min.js') }}"></script>

  

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  @if(session('status'))
  <script>
    swal("{{session('status')}}");
  </script>
  @endif


  
@yield('scripts')
 
</body>
</html>
