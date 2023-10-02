@extends('layouts.public')
@section('title', 'Homepage')
@section('content')
  <div class="home-jumbo">
    <div class="background-image"></div>
    <div class="comics-list">
      <div class="container position-relative">
        <div class="current-series-tag position-absolute text-white fw-bold fs-4 px-4 py-1">
          <span>CURRENT SERIES</span>
        </div>
        <div class="add-a-comic position-absolute text-white fw-bold fs-4 px-4 py-1">
          <a href="/comic/create" class="text-white"><span class="fs-2">+</span>  ADD A NEW COMIC</a>
        </div>
        <div class="row pt-5 g-4">
          @foreach ($comics as $singleComic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
              <a href="/comic/{{ $singleComic['id']}}" class="text-decoration-none">
                <div class="card bg-transparent border-0 rounded-0 h-100">
                  <img src="{{ $singleComic["thumb"] }}" class="card-img-top border-0 rounded-0" alt="{{ $singleComic["title"] }}" title="{{ $singleComic["title"] }}">
                  <div class="card-body ms-0 ps-0 text-white">
                    <p class="card-text text-uppercase fs-bold">{{ $singleComic['title'] }}</p>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        <div class="row p-4">
          <div class="col-12 d-flex justify-content-center">
            <button type="button" class="btn btn-primary text-uppercase fw-bold px-5 rounded-0 py-1">Load more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.menu-banner')
@endsection