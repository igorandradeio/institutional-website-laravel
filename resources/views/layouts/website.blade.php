<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <!-- Custom styles for this template -->    
        <link href="{{asset('css/main.css')}}" rel="stylesheet"/>
        <!-- Toast -->    
        @toastr_css
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        <!-- Header -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <a href="{{route('website.home')}}" class="logo me-auto"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
                <!-- Navigation -->
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="active" href="{{route('website.home')}}">Home</a></li>
                        <li><a href="{{route('website.about')}}">About</a></li>
                        <li><a href="{{route('website.categories')}}">Products</a></li>
                        <li><a href="{{route('website.blog')}}">Blog</a></li>
                        <li><a href="{{route('website.contact')}}">Contact us</a></li>
                    </ul>
                    <!-- Mobile navigation -->
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End header -->
        <!-- Main content -->
        <main>
            @yield('content')
        </main>
        <!-- Main content -->
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="{{asset('images/bootstrap-logo.svg')}}" alt="" width="24" height="19">
                        <small class="d-block mb-3 text-muted">&copy; 2021</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5><b>Pages</b></h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{route('website.home')}}">Home</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{route('website.about')}}">About</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{route('website.categories')}}">Products</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{route('website.blog')}}">Blog</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="{{route('website.contact')}}">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><b>Resources</b></h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><b>Social media</b></h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1"><a class="bi bi-facebook link-secondary text-decoration-none" href="#"> Facebook</a></li>
                            <li class="mb-1"><a class="bi bi-instagram link-secondary text-decoration-none" href="#"> Instagram</a></li>
                            <li class="mb-1"><a class="bi bi-twitter link-secondary text-decoration-none" href="#"> Twitter</a></li>
                            <li class="mb-1"><a class="bi bi-linkedin link-secondary text-decoration-none" href="#"> Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <!-- Scripts -->
    @jquery
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    @toastr_js
    @toastr_render
</html>