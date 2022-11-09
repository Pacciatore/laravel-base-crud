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
            <div class="card col-3 d-flex flex-column">

                <div class="img-container text-center">
                    <a href="{{ route('comic.show', $comic->id) }}">
                        <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                    </a>
                </div>

                <div class="comic-info p-2">
                    <h1> {{ $comic['title'] }} </h1>

                    <p> {{ $comic['description'] }} </p>

                    <p> {{ $comic['price'] }} €</p>
                </div>

                <div class="btn btn-secondary">
                    <a href="{{ route('comic.edit', $comic->id) }}" class="text-white text-decoration-none">Edita</a>
                </div>

                <a href="{{ route('comic.confirm-delete', $comic->id) }}">Elimina</a>
                {{-- <form action="{{ route('comic.destroy', $comic->id) }}" method="POST" class="text-center">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Cancella" class="btn btn-primary">
                </form>
                --}}
            </div>
        @endforeach

    </div>
@endsection
