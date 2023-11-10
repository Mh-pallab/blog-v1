
    
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="{{isset($category)? $category->name :''}}" name="name" id="name" required>
    </div>

    <div class="form-group mb-3">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="1" {{ ((isset($category)) && $category->status == 1) ? 'selected' : '' }}>Active</option>
            <option value="0" {{ ((isset($category)) && $category->status == 0) ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
    <button class="btn btn-primary float-end">Save</button>
