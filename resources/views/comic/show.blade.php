@extends('layouts.public')
@section('title', 'Comic content')
@section('content')
  <div class="home-jumbo">
    <div class="background-image"></div>
    <div class="comics-list">
      <div class="container position-relative">
        <div class="current-series-tag position-absolute text-white fw-bold fs-4 px-4 py-1">
          <span>{{ $comic->title }}</span>
        </div>
        <div class="row pt-5 g-4">
          <div class="col-12">

          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.menu-banner')
@endsection