<div class="form-group mb-3">
    <label for="category">Category</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value="0">--Select a Category--</option>
        @foreach ($category_list as $item)
            <option value="{{$item->id}}" {{ isset($blog) && $blog->category_id == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="title">Title</label>
    <input type="text" class="form-control" value="{{ isset($blog) ? $blog->title : '' }}" name="title"
        id="title" required>
</div>

<div class="form-group mb-3">
    <label for="description">Description</label>
    <textarea type="text" class="form-control"  name="description"
        id="description" required>{{ isset($blog) ? $blog->description : '' }}</textarea>
</div>

<div class="form-group mb-3">
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
</div>

<div class="form-group mb-3">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="1" {{ isset($blog) && $blog->status == 1 ? 'selected' : '' }}>Active</option>
        <option value="0" {{ isset($blog) && $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
<button class="btn btn-primary float-end">Save</button>
