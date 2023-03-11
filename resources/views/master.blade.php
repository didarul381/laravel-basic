<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <title>@yield('title')</title>
  
</head>
<body>
    <!-- nav start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ps-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ps-5" id="navbarNav">
      <ul class="navbar-nav ps-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{url('/about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{url('/service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{url('/contact')}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- nav end -->



   @yield('content')







 <script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>