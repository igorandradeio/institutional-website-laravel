@extends('layouts.website')
@section('title', 'About us')
@section('content')
<!-- ==== Breadcrumbs ==== -->
<div class="breadcrumbs">
    <div class="container">
        <h2>About us</h2>
        <p>Our company culture, and how we do things</p>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- ==== About us Section ==== -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{asset('images/about/work-about-us.jpeg')}}" class="img-fluid" alt="people doing office works">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Eveniet consequatur dolorem accusantium blanditiis culpa, odio itaque nesciunt mollitia et eos ratione doloribus.</li>
                    <li><i class="bi bi-check-circle"></i> Eveniet consequatur dolorem accusantium blanditiis culpa, odio itaque nesciunt mollitia et eos ratione doloribus.</li>
                    <li><i class="bi bi-check-circle"></i> Eveniet consequatur dolorem accusantium blanditiis culpa, odio itaque nesciunt mollitia et eos ratione doloribus.</li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet consequatur dolorem accusantium blanditiis culpa, odio itaque nesciunt mollitia et eos ratione doloribus, illum voluptates facere numquam? Quaerat deserunt molestiae sunt.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Contact us Section -->
@endsection