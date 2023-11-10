@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Edit Category') }}
                <a href="{{ route('category.index') }}" class="btn btn-secondary float-end">Back</a>
            </div>

            <div class="card-body">
                <form action="{{route('category.update', $category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.category.form')
                </form>
            </div>
        </div>
    </div>
@endsection
