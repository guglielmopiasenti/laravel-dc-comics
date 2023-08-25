<ul class="ul-comic">
  @foreach(config('comics') as $comic)
    <li class="li-comic">
      <a href="{{url("/comic/$loop->index")}}">
        <img class="img-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
        {{ $comic['series'] }}
      </a>
    </li>
  @endforeach
</ul>