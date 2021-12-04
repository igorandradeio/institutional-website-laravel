@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit post</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{$post->title}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @include('admin.blog.partials.form')
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /.content -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()
    })
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@stop