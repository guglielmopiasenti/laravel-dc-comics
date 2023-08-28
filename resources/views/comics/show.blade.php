@extends('layouts.main')
@section('title', 'Comic')

@section('main-content')

<div class="comic-container">
  <div class="comic-image-wrapper">
    <div class="comic-info-img">COMIC BOOK</div>
    <img class="comic-image" src="{{ $comic['thumb'] }}" alt="$comic['series']">
    <div class="comic-view-gallery">VIEW GALLERY</div>
  </div>
  <div class="comic-details">
    <div class="comic-title-section">
      <h3 class="comic-title">{{$comic['title']}}</h3>
      <div class="comic-price-availability">
        <div class="comic-price">US Price: {{$comic['price']}}</div>
        <div class="comic-available">AVAILABLE</div>
        <div>
          <div class="comic-availability">
            Check Availability
          </div>
        </div>
      </div>
      <p class="comic-description">{{$comic['description']}}</p>
    </div>
    <div class="comic-advertisement-card">
      <div>ADVERTISEMENT</div>
      <img src="public/img/adv.jpg" alt="">
    </div>
  </div>
  <a href="{{route('comics.edit', $comic)}}" class="btn btn-secondary">Edit Comic</a>
</div>
<div class="comic-talent-section">
  <div class="comic-container">
    <div class="comic-talent-specs">
      <div class="comic-talent">
        <table class="comic-talent-table">
          <thead>
            <tr>
              <th colspan="2">
                <h1>Talent</h1>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="comic-artists">
              <td>Art by:</td>
              <td class="artists">{{ $comic['artists'] }}</td>
            </tr>
            <tr class="comic-writers">
              <td>Written by:</td>
              <td class="writers">{{$comic['writers'] }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="comic-specs">
        <table class="comic-specs-table">
          <thead>
            <tr>
              <th colspan="2">
                <h1>Specs</h1>
              </th> 
            </tr>
          </thead>
          <tbody>
            <tr class="comic-series">
              <td>Series:</td>
              <td class="series">{{$comic['series']}}</td>
            </tr>
            <tr class="comic-us-price">
              <td>US Price:</td>
              <td>{{$comic['price']}}</td>
            </tr>
            <tr class="comic-sale-date">
              <td>On Sale Date:</td>
              <td>{{$comic['sale_date']}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection