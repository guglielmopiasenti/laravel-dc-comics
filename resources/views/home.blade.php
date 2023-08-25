@extends('layouts.main')
@section('title', 'HOME')
@section('main-content')
<section id="main">

  <h1 class="title">CURRENT SERIES</h1>
  <AppJumbotron />
  <div class="container">
    @include('includes.button')
    @include('includes.comiccard')
  </div>
</section>
  @endsection