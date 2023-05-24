@extends('layouts.app')

@section('content')
    <h1 class="title">LISTA FILM</h1>

    <div class="card-container">
        <div class="container  py-4">
            <div class="row row-cols-5 g-3 mt-3">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }} - {{ $movie->original_title }}</h5>
                                <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                                <p class="card-text">Data uscita: {{ $movie->date }}</p>
                                <p class="card-text">Voto: {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
