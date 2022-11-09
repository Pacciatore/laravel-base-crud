@extends('layouts.app')

@section('title')
    Edit Comic
@endsection

@section('content')
    <form method="POST" action="{{ route('comic.update', $comic->id) }}">
        @csrf
        @method('PUT')


        {{-- Titolo fumetto --}}
        <label for="title">Titolo: </label>
        <input type="text" name="title" id="title" value="{{ $comic['title'] }}">

        {{-- Descrizione fumetto --}}
        <label for="description">Descrizione: </label>
        <input type="text" name="description" id="description" value="{{ $comic['description'] }}">

        {{-- Link thumb --}}
        <label for="thumb">Link immagine: </label>
        <input type="url" name="thumb" id="thumb" value="{{ $comic['thumb'] }}">

        {{-- Prezzo fumetto --}}
        <label for="price">Prezzo: </label>
        <input type="number" step=".01" name="price" id="price" value="{{ $comic['price'] }}">

        {{-- Serie del fumetto --}}
        <label for="series">Serie: </label>
        <input type="text" name="series" id="series" value="{{ $comic['series'] }}">

        {{-- Data di inizio vendita --}}
        <label for="sale_date">Data di vendita: </label>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic['sale_date'] }}">

        {{-- Tipo fumetto --}}
        <label for="type">Tipo: </label>
        <input type="text" name="type" id="type" value="{{ $comic['type'] }}">

        <input type="submit" value="Aggiorna">


    </form>
@endsection
