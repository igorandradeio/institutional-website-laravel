@extends('layouts.website')
@section('title', 'Blog - Post')
@section('content')
<!-- ==== Breadcrumbs ==== -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Blog</h2>
    </div>
</div>
<!-- End Breadcrumbs -->
<!-- ==== Blog Section ==== -->
<section id="blog">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8">
                <!-- Title -->
                <h1 class="mt-4">{{ $post->title }}</h1>
                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">{{ $post->user->name }}</a>
                </p>
                <hr>
                <!-- Date/Time -->
                <p>Posted on {{ $post->created_at->format(' F j, Y') }} at {{ $post->created_at->format(' H:i A') }}</p>
                <hr>
                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{url("storage/{$post->image}")}}" alt="">
                <hr>
                <!-- Post Content -->
                <p class="lead">{!! $post->content !!}</p>
                <hr>
            </div>
            @include('website.blog.shared.sidebar')
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- End Blog Section -->
@endsection