@extends('layouts.app')

@section('content')
    <div>
        @foreach ($blogs as $item)
            @if ($loop->iteration % 2 == 1)
            <div class="row">
                <div class="card mb-3">
                    <div class="row g-0" style="height: 300px;">
                        <div class="col-md-6 img">
                            <img src="{{ asset($item->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6 d-flex flex-grow-1 justify-content-center align-items-center p-3">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit($item->description, 420) }}</p>
                                <p class="card-text" style="margin: 0;"><small class="category">Category <small
                                            class="text-muted">in</small> {{ $item->category->name }}</small></p>
                                <p class="card-text"><small class="text-muted">Last updated at
                                        {{ Str::limit($item->updated_at, 10, '') }}</small></p>
                            </div>
                        </div>
                    </div>
                </div></div>
            @else
            <div class="row">
                <div class="card mb-3">
                    <div class="row g-0" style="height: 300px;">
                        <div class="col-md-6 d-flex flex-grow-1 justify-content-center align-items-center p-3">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit($item->description, 420) }}</p>
                                <p class="card-text" style="margin: 0;"><small class="category">Category <small
                                            class="text-muted">is</small> {{ isset($item->category->name)? $item->category->name:'General' }}</small></p>
                                <p class="card-text"><small class="text-muted">Last updated at
                                        {{ Str::limit($item->updated_at, 10, '') }}</small></p>
                            </div>
                        </div>
                        <div class="col-md-6 img">
                            <img src="{{ asset($item->image) }}" class="img-fluid rounded-end" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
@endsection
