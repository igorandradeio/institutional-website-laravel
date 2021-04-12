@extends('layouts.website')

@section('title', 'Products')

@section('content')
<!-- ==== Breadcrumbs ==== -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Products</h2>
    </div>
</div><!-- End Breadcrumbs -->

<!-- ==== Products Section ==== -->
<section id="Product">
    
    <div class="container">

        <div class="row">
            
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="{{asset('images/about/work-about-us.jpeg')}}" class="img-fluid" alt="">
            </div>
            
            <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content">
                <h3>{{$slug}}</h3>
                <ul>
                    <li><i class="bi bi-cash"></i> Price: 22,00</li>
                    <li><i class="bi bi-tag"></i> Category: {{$slug}}</li>

                </ul>
                <h5>Description</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet consequatur dolorem accusantium blanditiis culpa, odio itaque nesciunt mollitia et eos ratione doloribus, illum voluptates facere numquam? Quaerat deserunt molestiae sunt.
                </p>
            </div>

        </div>


    </div>

</section><!-- End Products Section -->
@endsection