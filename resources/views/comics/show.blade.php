@extends('layouts.app')

@section('title')
    {{ $comic['title'] }}
@endsection

@section('content')
    <div class="img-container text-center">
        <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
    </div>

    <div class="comic-info p-2">
        <h1> {{ $comic['title'] }} </h1>

        <p> {{ $comic['description'] }} </p>

        <p> {{ $comic['price'] }} </p>
    </div>

    <div class="btn btn-primary">
        <a class="text-white text-decoration-none" href="{{ route('comic.index') }}">Back</a>
    </div>
@endsection
