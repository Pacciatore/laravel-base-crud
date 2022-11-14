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

    <div class="btn btn-info">
        <a href=" {{ route('comic.edit', $comic->id) }}" class="text-white text-decoration-none">Edita</a>
    </div>

    <div class="btn btn-primary">
        <a href="{{ route('comic.index') }}" class="text-white text-decoration-none">Back</a>
    </div>
@endsection
