<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="{{ asset('css/backend/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/uniform.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend/matrix-media.css')}}" />
<link href="{{ asset('fonts/backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/backend/jquery.gritter.css')}}" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

 
</head>
<body>

<!--start Header-->
  @include('layouts.backend.header')
<!--close-top-Header-menu-->
  
<!--close-top-serch-->

<!--end sidebar-->
  @include('layouts.backend.sidebar')

<!--end sidebar-->



<!--main-container-part-->
  @yield('content')
  
<!--end-main-container-part-->

<!--Footer-part-->
   @include('layouts.backend.footer')


<!--end-Footer-part-->









 


<script src="{{ asset('js/backend/jquery.min.js')}}"></script> 
<script src="{{ asset('js/backend/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset('js/backend/bootstrap.min.js')}}"></script> 
<script src="{{ asset('js/backend/jquery.uniform.js')}}"></script> 
<script src="{{ asset('js/backend/select2.min.js')}}"></script>
<script src="{{ asset('js/backend/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset('js/backend/jquery.validate.js')}}"></script> 
<script src="{{ asset('js/backend/matrix.js')}}"></script> 
<script src="{{ asset('js/backend/matrix.form_validation.js')}}"></script>
<script src="{{ asset('js/backend/matrix.tables.js')}}"></script>
 
</body>
</html>
