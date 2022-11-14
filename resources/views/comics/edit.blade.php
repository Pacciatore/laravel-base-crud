@extends('layouts.app')

@section('title')
    Edit Comic
@endsection

@section('content')
    <div class="edit-content py-4">

        {{-- @if ($errors->any())
            <div class="alert alert-danger alert-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form method="POST" action="{{ route('comic.update', $comic->id) }}"
            class="d-flex flex-column justify-content-between">
            @csrf
            @method('PUT')


            {{-- Titolo fumetto --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="title">Titolo: </label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic['title']) }}">

                @error('title')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Descrizione fumetto --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="description">Descrizione: </label>
                <input type="text" name="description" id="description"
                    value="{{ old('description', $comic['description']) }}">

                @error('description')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Link thumb --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="thumb">Link immagine: </label>
                <input type="url" name="thumb" id="thumb" value="{{ old('thumb', $comic['thumb']) }}">

                @error('thumb')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Prezzo fumetto --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="price">Prezzo: </label>
                <input type="number" step=".01" name="price" id="price"
                    value="{{ old('price', $comic['price']) }}">

                @error('price')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Serie del fumetto --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="series">Serie: </label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic['series']) }}">

                @error('series')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Data di inizio vendita --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="sale_date">Data di vendita: </label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic['sale_date']) }}">

                @error('sale_date')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Tipo fumetto --}}
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <label for="type">Tipo: </label>
                <input type="text" name="type" id="type" value="{{ old('type', $comic['type']) }}">

                @error('type')
                    <div class="alert alert-danger error-message">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <input class="btn btn-info text-white" type="submit" value="Aggiorna">
            </div>

        </form>

        <div class="btn btn-primary position-absolute">
            <a href=" {{ route('comic.show', $comic->id) }} " class="text-white text-decoration-none">Back to comic</a>
        </div>

    </div>
@endsection
