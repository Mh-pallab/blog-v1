@extends('layouts.app')

@section('content')
    

    <div class="mb-5">
    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-md-6 pe-4">
                <img src="{{asset('phptp/photo1.avif')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body ">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text" style="margin: 0;"><small class="category">Category</small></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-md-6">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div></div>
@endsection
