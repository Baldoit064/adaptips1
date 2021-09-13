@extends('template')

@section('title', 'Criar Filme')

@section('content')
<div class="create-container">
    <form id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Título" required> 
        <input type="text" name="genre" placeholder="Gênero" required> 
        <select name="country_id" id="country_id">
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input type="text" name="release" placeholder="Data de Lançamento" required> 
        <input type="text" name="rating" placeholder="Nota" required> 
        <textarea name="synopsis" id="synopsis" cols="30" rows="10" required></textarea>
        <input type="file" name="image" accept='image/*' required> 
        <button type="submit">Criar</button>
    </form>
</div>
@endsection