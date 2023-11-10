@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">{{ __('Add Category') }}
                <a href="{{ route('category.index') }}" class="btn btn-secondary float-end">Back</a>
            </div>

            <div class="card-body">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    @include('admin.category.form')
                </form>
            </div>
        </div>
    </div>
@endsection
