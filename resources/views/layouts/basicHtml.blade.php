<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acme</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
  @include('inc.navbar')

  <div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif

    <div class="row">
      <div class="col-md-8 col-lg-8">
        @include('inc.messages')
        @yield('content')   <!--Main Content home heading -->
      </div>
      <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>
    <!-- yield copys this format and pastes it whenevr this file is extended. Also allows you to append by useing @section('content')-->
    <!-- section allows you to append to this in individal views by using @section('sidebar')-->

    </div>
    <footer id="footer" class="text-center">
      <p>Copyright 2018 &copy; Acme</p>
    </footer>
  </body>
</html>
