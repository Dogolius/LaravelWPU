@extends('layouts/main')
@section('container')
    <h1 class="mb-5">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/600x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center">
                            <h5 class="card-title text-center flex-fill"><a href="/blog?category={{ $category->slug }}" class="text-decoration-none text-white bg-dark px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</a></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

