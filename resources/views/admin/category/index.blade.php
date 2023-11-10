@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Category List') }}
                <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add Category</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($category_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ ($item->status == 1)? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{route('category.edit', $item->id)}}" class="btn btn-success">Edit</a>
                                    {{-- <a href="{{route('category.destroy', $item->id)}}" class="btn btn-danger">Delete</a> --}}
                                    <form style="display: inline-block;" action="{{route('category.destroy', $item->id)}}" method="POST">
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
