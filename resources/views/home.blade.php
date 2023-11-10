@extends('layouts.app')

@section('content')
    <div>
        @foreach ($blogs as $item)
            @if ($loop->iteration % 2 == 1)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-6 pe-4">
                            <img src="{{ asset('phptp/photo1.avif') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6 d-flex flex-grow-1 justify-content-center align-items-center pe-3">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text" style="margin: 0;"><small class="category">Category <small
                                            class="text-muted">in</small> {{ $item->category->name }}</small></p>
                                <p class="card-text"><small class="text-muted">Last updated at
                                        {{ Str::limit($item->updated_at, 10, '') }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="card mb-3">
                    <div class="row g-0">

                        <div class="col-md-6 d-flex flex-grow-1 justify-content-center align-items-center ps-3">
                            <div class="card-body ">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text" style="margin: 0;"><small class="category">Category <small
                                            class="text-muted">in</small> {{ $item->category->name }}</small></p>
                                <p class="card-text"><small class="text-muted">Last updated at
                                        {{ Str::limit($item->updated_at, 10, '') }}</small></p>
                            </div>
                        </div>
                        <div class="col-md-6 ps-4">
                            <img src="{{ asset('phptp/photo1.avif') }}" class="img-fluid rounded-end" alt="...">
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
