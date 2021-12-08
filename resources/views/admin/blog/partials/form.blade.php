@csrf
<input name="id" type="hidden" value="{{$post->id ?? old('id')}}">
<div class="card-body">
    <div class="form-group">
        <label>Title</label>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
        <input type="text" value="{{$post->title ?? old('title') }}" class="form-control" name="title" placeholder="Enter Title here">
    </div>
</div>
<!-- /.card-body -->
<div class="card-body">
    <div class="form-group">
        <label>Featured image</label>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
        <div class="custom-file">
            <input type="file" name="image" id="image" class="custom-file-input">
            <label class="custom-file-label">Choose file</label>
        </div>
    </div>
</div>
<!-- /.card-body -->
<div class="card-body">
    <div class="form-group">
        <label>Text</label>
        @error('title')
        <div>{{ $message }}</div>
        @enderror
        <textarea id="summernote" name="content">{{ $post->content ?? old('content') }}</textarea>
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>