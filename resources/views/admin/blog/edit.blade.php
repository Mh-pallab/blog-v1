@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Edit Blog') }}
                <a href="{{ route('blog.index') }}" class="btn btn-secondary float-end">Back</a>
            </div>

            <div class="card-body">
                
                <form action="{{route('blog.update', $blog->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.blog.form')
                </form>
            </div>
        </div>
    </div>
@endsection
