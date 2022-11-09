<h1>Are you sure?</h1>

<form action="{{ route('comic.destroy', $comic->id) }}" method="POST" class="text-center">
    @csrf
    @method('DELETE')

    <input type="submit" value="Sì" class="btn btn-primary">
</form>

<a href="{{ route('comic.index') }}">No</a>
