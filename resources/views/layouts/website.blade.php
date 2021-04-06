<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->    
    <link href="{{asset('css/main.css')}}" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>home page</title>
  </head>
  <body>
    <!-- Header -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">

        <a href="{{route('website.home')}}" class="logo me-auto"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="active" href="{{route('website.home')}}">Home</a></li>
            <li><a href="{{route('website.about')}}">About</a></li>
            <li><a href="{{route('website.products')}}">Products</a></li>
            <li><a href="{{route('website.blog')}}">Blog</a></li>
            <li><a href="{{route('website.contact')}}">Contact us</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->
    @yield('content')


  </body>
  <!-- Scripts -->

  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</html>