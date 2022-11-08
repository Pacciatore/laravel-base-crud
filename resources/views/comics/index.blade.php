@extends('layouts.app')

@section('title')
    DC Comics
@endsection

@section('content')
    <div class="text-center pb-3">
        <div class="btn btn-primary">
            <a class="text-white text-decoration-none" href="{{ route('comic.create') }}">Aggiungi fumetto</a>
        </div>
    </div>

    <div class="card-container d-flex flex-wrap gap-3 justify-content-around">

        @foreach ($comics as $comic)
            <div class="card col-3">

                <div class="img-container text-center">
                    <a href="{{ route('comic.show', $comic->id) }}">
                        <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                    </a>
                </div>

                <div class="comic-info p-2">
                    <h1> {{ $comic['title'] }} </h1>

                    <p> {{ $comic['description'] }} </p>

                    <p> {{ $comic['price'] }} </p>
                </div>

            </div>
        @endforeach

    </div>
@endsection
