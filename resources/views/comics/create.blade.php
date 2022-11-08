@extends('layouts.app')

@section('title')
    Creazione Comic
@endsection

@section('content')
    <form action="{{ route('comic.store') }}" method="POST" class="d-flex flex-column gap-2 flex-wrap justify-content-around">
        @csrf

        {{-- Titolo fumetto --}}
        <label for="title">Titolo: </label>
        <input type="text" name="title" id="title">

        {{-- Descrizione fumetto --}}
        <label for="description">Descrizione: </label>
        <input type="text" name="description" id="description">

        {{-- Link thumb --}}
        <label for="thumb">Link immagine: </label>
        <input type="url" name="thumb" id="thumb">

        {{-- Prezzo fumetto --}}
        <label for="price">Prezzo: </label>
        <input type="number" name="price" id="price">

        {{-- Serie del fumetto --}}
        <label for="series">Serie: </label>
        <input type="text" name="series" id="series">

        {{-- Data di inizio vendita --}}
        <label for="sale_date">Data di vendita: </label>
        <input type="date" name="sale_date" id="sale_date">

        {{-- Tipo fumetto --}}
        <label for="type">Tipo: </label>
        <input type="text" name="type" id="type">

        <input type="submit" value="Crea">

    </form>
@endsection
