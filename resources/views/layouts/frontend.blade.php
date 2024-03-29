<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    @yield('title') | EsiControl
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('frontend/css/bootstrap.css')}}" />
    
</head>
<body>
    @include('layouts.inc.navbar')
    <div class="content">
         @yield('content')
    </div>
    
    <script src="{{asset('frontend/js/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    @yield('scripts')
</body>
</html>