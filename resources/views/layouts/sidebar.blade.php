<div class="col-md-3">
    <div class="card mb-3">
        <div class="card-header">
            <a class="btn py-0" href="{{route('dashboard')}}">Dashboard</a>
        </div>
        <div class="card-body">
            <ul class="sidebar-menu">
                <li><a class="{{ Route::is('category*')? 'active':''}}" href="{{route('category.index') }}">Category</a></li>
                <li><a class="{{ Route::is('blog*')? 'active':''}}" href="{{route('blog.index')}}">Blog</a></li>
            </ul>
        </div>
    </div>
    
</div>