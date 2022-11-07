@extends('layouts.app')

@section('title')
    DC Comics
@endsection

@section('content')
    <div class="card-container d-flex flex-wrap gap-3 justify-content-around">

        @foreach ($comics as $comic)
            <div class="card col-3">

                <div class="img-container text-center">
                    <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
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
