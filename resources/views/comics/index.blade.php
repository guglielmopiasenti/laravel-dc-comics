@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <section id='comics'>
        <div class="flex-container">
            <div class="text-center my-5">
                <a href="{{route('comics.create')}}" class="btn btn-success">Add Comic</a>
            </div>

          <ul class="ul-comic">
                    @foreach ($comics as $comic)
                    <li class="li-comic">
                        <a href="{{ route('comics.show', $comic) }}">
                            <figure>
                                <img class="comic-thumb" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </figure>
                            <h4>{{ $comic['title'] }}</h4>
                        </a>
                        <div>
                          <a class="btn btn-primary btn-sm" href="{{route('comics.show', $comic)}}">See Details</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
        </div>
    </section>

@endsection