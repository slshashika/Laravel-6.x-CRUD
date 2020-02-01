<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Larvel 6.X CRUD</title>

{{-- <!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet"> --}}
 


<!-- Font Awesome -->
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('test/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('test/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('test/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
  
  @include('layouts.navbar')

  @yield('content')

  @include('layouts.footer')
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  {{-- <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script> --}}

  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('test/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('test/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('test/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('test/js/mdb.min.js')}}"></script>
</body>

</html>
