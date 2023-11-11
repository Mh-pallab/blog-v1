@extends('layouts.app')

@section('content')
    <div class="card">
        <img src="{{ asset($blog->image) }}" class="card-img-top" alt="...">
        <div class="card-body cardReadMore">
            <h5 class="card-title">{{ $blog->title }}</h5>
            <p class="card-text">{{ $blog->description }} </p>
            <p class="card-text" style="margin: 0;"><small class="category">Category <small class="text-muted">in</small>
                    {{ $blog->category->name }}</small>
            </p>
            <p class="card-text"><small class="text-muted">Last updated at
                    {{ $blog->updated_at }}</small></p>
        </div>
    </div>
@endsection
