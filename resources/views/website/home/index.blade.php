@extends('layouts.website')
@section('title', 'Home page')
@section('content')
<!-- ==== Home page Section ==== -->
<section id="home">
    <!-- Container -->
    <div class="container main-container">
        <div class="row">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('images/image-homepage.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6 hero-text">
                <h1 class="display-5 fw-bold lh-1 mb-3">Your Company deserves a Website</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam odio, voluptate temporibus culpa, soluta rerum molestiae nemo, vitae minima quam aliquid similique accusamus eius consequuntur nobis laborum repellat expedita facilis!</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="{{route('website.categories')}}">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Meet Our Products</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End container -->
    <!-- Container -->
    <div class="container pb-3 my-3">
        <div class="row">
            <div class="px-4 pt-4 my-4 text-center border-bottom">
                <h1 class="display-4 fw-bold">Centered screenshot</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                    <div class="container px-5">
                        <img src="{{asset('images/home/bootstrap-docs.png')}}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End container -->
    <!-- Container -->
    <div class="container">
        <h2 class="display-5 fw-bold border-bottom">Latest posts</h2>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img src="{{asset('images/blog/example-post.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Card One</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-sm radius-button ">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img src="{{asset('images/blog/example-post.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Card Two</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-sm radius-button ">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img src="{{asset('images/blog/example-post.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">Card Three</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-sm radius-button ">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- home page Section -->
@endsection