@extends('layouts.main')

@section('title', 'Comics')

@section('main')
    <section id='comics'>
        <div class="flex-container">

            @foreach ($comics as $comic)
                <div class="card">
                    <a href="{{ route('comics.show', $comic) }}">
                        <figure>
                            <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </figure>
                        <h4>{{ $comic['title'] }}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@endsection
