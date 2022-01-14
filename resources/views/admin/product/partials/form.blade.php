@csrf
<input name="id" type="hidden" value="{{$product->id ?? old('id')}}">
<div class="row">
    <div class="card-body">
        <div class="form-group">
            <label>Title</label>
            @error('name')
            <div>{{ $message }}</div>
            @enderror
            <input type="text" value="{{$product->name ?? old('name') }}" class="form-control" name="name" placeholder="Enter Title here">
        </div>
    </div>
    <!-- /.card-body -->
</div>
<div class="row">
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
</div>
<div class="row">
    <div class="card-body">
        <div class="form-group">
            <label>Description</label>
            @error('description')
            <div>{{ $message }}</div>
            @enderror
            <input type="text" value="{{$product->description ?? old('description') }}" class="form-control" name="description" placeholder="Enter description here">
        </div>
    </div>
</div>
<div class="row">
    <div class="card-body">
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                @forelse($categories as $category)
                @if(!empty($product->category_id))
                <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                @else
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
                @empty
                <option selected></option>
                @endforelse
            </select>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>