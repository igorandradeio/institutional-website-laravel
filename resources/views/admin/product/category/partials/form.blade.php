@csrf
<input name="id" type="hidden" value="{{$category->id ?? old('id')}}">
<div class="card-body">
    <div class="form-group">
        <label>Title</label>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
        <input type="text" value="{{$category->name ?? old('name') }}" class="form-control" name="name" placeholder="Enter Title here">
    </div>
</div>
<!-- /.card-body -->
<div class="card-body">
    <div class="form-group">
        <label>Featured image</label>
        @error('image')
        <div>{{ $message }}</div>
        @enderror
        <div class="custom-file">
            <input type="file" name="image" id="image" class="custom-file-input">
            <label class="custom-file-label">Choose file</label>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="form-group">
        <label>Description</label>
        @error('description')
        <div>{{ $message }}</div>
        @enderror
        <input type="text" value="{{$category->description ?? old('description') }}" class="form-control" name="description" placeholder="Enter description here">
    </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>