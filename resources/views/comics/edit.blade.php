@extends('layouts.app')

@section('title')
    Edit Comic
@endsection

@section('content')
    <div class="edit-content">

        @if ($errors->any())
            <div class="alert alert-danger alert-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('comic.update', $comic->id) }}"
            class="py-4 d-flex flex-column justify-content-between">
            @csrf
            @method('PUT')


            {{-- Titolo fumetto --}}
            <div class="col-3">
                <label for="title">Titolo: </label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic['title']) }}">
            </div>

            {{-- Descrizione fumetto --}}
            <div class="col-3">
                <label for="description">Descrizione: </label>
                <input type="text" name="description" id="description"
                    value="{{ old('description', $comic['description']) }}">
            </div>

            {{-- Link thumb --}}
            <div class="col-3">
                <label for="thumb">Link immagine: </label>
                <input type="url" name="thumb" id="thumb" value="{{ old('thumb', $comic['thumb']) }}">
            </div>

            {{-- Prezzo fumetto --}}
            <div class="col-3">
                <label for="price">Prezzo: </label>
                <input type="number" step=".01" name="price" id="price"
                    value="{{ old('price', $comic['price']) }}">
            </div>

            {{-- Serie del fumetto --}}
            <div class="col-3">
                <label for="series">Serie: </label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic['series']) }}">
            </div>

            {{-- Data di inizio vendita --}}
            <div class="col-3">
                <label for="sale_date">Data di vendita: </label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic['sale_date']) }}">
            </div>

            {{-- Tipo fumetto --}}
            <div class="col-3">
                <label for="type">Tipo: </label>
                <input type="text" name="type" id="type" value="{{ old('type', $comic['type']) }}">
            </div>

            <div class="col-3">
                <input type="submit" value="Aggiorna">
            </div>

        </form>

        <div class="btn btn-primary">
            <a href=" {{ route('comic.show', $comic->id) }} " class="text-white text-decoration-none">Back to comic</a>
        </div>

    </div>
@endsection
