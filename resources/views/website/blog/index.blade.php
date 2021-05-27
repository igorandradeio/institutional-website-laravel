@extends('layouts.website')
@section('title', 'Blog')
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
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="{{asset( $post->image )}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->content }}</p>
                        <a href="{{route('website.blog.show', ['slug' => $post->slug])}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{ $post->created_at->format(' F j, Y') }} by {{ $post->user->name }}
                    </div>
                </div>
                @endforeach
                <!-- Pagination -->
                <div class="pagination justify-content-center mb-4">
                    {{ $posts->links() }}
                </div>
            </div>
            @include('website.blog.shared.sidebar')
        </div>
    </div>
</section>
<!-- End Blog Section -->
@endsection