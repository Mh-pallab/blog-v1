@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Blog List') }}
                <a href="{{ route('blog.create') }}" class="btn btn-primary float-end">Add Blog</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>SL.</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($blog_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ ($item->status == 1)? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{route('blog.edit', $item->id)}}" class="btn btn-success">Edit</a>
                                    {{-- <a href="{{route('blog.destroy', $item->id)}}" class="btn btn-danger">Delete</a> --}}
                                    <form style="display: inline-block;" action="{{route('blog.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
