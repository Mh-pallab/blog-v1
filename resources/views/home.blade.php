@extends('layouts.app')

@section('content')
    <div>
        @if (!$blogs->isNotEmpty())
            <h1>No Post</h1>
        @endif
        @foreach ($blogs as $item)
            @if ($loop->iteration % 2 == 1)
                <div class="row mb-3">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-6 img">
                                <img src="{{ asset($item->image) }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-6 d-flex flex-grow-1 justify-content-center      align-items-center p-3">
                                <div class="card-body cardHome">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {{-- cut the text for 420 length limit --}}
                                        {{ Str::limit($item->description, 420) }}

                                        {{-- if text is cut then readmore button visible --}}
                                        @if (Str::length($item->description) > 420)
                                            <a href="{{ route('readmore', $item->id) }}">Read more</a>
                                        @endif

                                    </p>
                                    <p class="card-text" style="margin: 0;"><small class="category">Category <small
                                                class="text-muted">in</small> {{ $item->category->name }}</small>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated at
                                            {{ Str::limit($item->updated_at, 10, '') }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row mb-3">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex flex-grow-1 justify-content-center align-items-center p-3">
                                <div class="card-body cardHome">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {{-- cut the text for 420 length limit --}}
                                        {{ Str::limit($item->description, 420) }}

                                        {{-- if text is cut then readmore button visible --}}
                                        @if (Str::length($item->description) > 420)
                                            <a href="{{ route('readmore', $item->id) }}">Read more</a>
                                        @endif
                                    </p>
                                    <p class="card-text" style="margin: 0;"><small class="category">Category <small
                                                class="text-muted">is</small>
                                            {{ isset($item->category->name) ? $item->category->name : 'General' }}</small>
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated at
                                            {{ Str::limit($item->updated_at, 10, '') }}</small></p>
                                </div>
                            </div>
                            <div class="col-lg-6 img">
                                <img src="{{ asset($item->image) }}" class="img-fluid rounded-end" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
