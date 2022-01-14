@extends('layouts.website')
@section('title', 'Products')
@section('content')
<!-- ==== Breadcrumbs ==== -->
<div class="breadcrumbs">
    <div class="container">
        <h2>{{$product->name}}</h2>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- ==== Products Section ==== -->
<section id="Product">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="{{url("storage/{$product->image}")}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-2 content">
                <h3></h3>
                <ul>
                    <li><i class="bi bi-tag"></i> Category: {{$category}}</li>
                </ul>
                <h5>Description</h5>
                <p>
                    {{$product->description}}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Products Section -->
@endsection