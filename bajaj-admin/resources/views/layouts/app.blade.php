<!doctype html>
<html>
<head>
   @include('layouts.head')
</head>
<body>
   <!-- header -->
   @include('layouts.header')

   <!-- main section -->
   <div class="container">
        <div id="main" class="row">
                @yield('content')
        </div>
    </div>
<!-- footer -->
@include('layouts.footer')
 
</body>
</html>