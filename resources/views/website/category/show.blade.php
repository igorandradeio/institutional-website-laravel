@extends('layouts.website')
@section('title', 'Products')
@section('content')
<!-- ==== Breadcrumbs ==== -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Products</h2>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- ==== Products Section ==== -->
<section id="Product">
    <div class="container">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Meet our Products</h1>
            <p class="fs-5 text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit dicta deleniti exercitationem eveniet esse fuga a iure. Quo odit animi nulla consequuntur ipsum mollitia, iusto, sed error rem natus esse!</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach($category->products as $product)
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <a href="{{route('website.product.show', ['slug' => $product->slug])}}">
                        <div class="card-header py-3 text-white bg-primary border-primary">
                            <h4 class="my-0 fw-normal">{{$product->name}}</h4>
                        </div>
                        <img class="card-img-top" src="{{url("storage/{$product->image}")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>{{$product->description}}</li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Products Section -->
@endsection