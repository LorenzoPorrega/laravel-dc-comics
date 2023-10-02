@extends('layouts.public')
@section('title', 'Comic content')
@section('content')
  <div class="home-jumbo">
    <div class="background-image"></div>
    <div class="row thumb-container d-flex justify-content-center">
      <div class="col-6">
        <div class="thumb-preview position-relative">
          <div class="thumb-box border border-2 border-white position-absolute">
            <img src="{{ $comic->thumb }}" title="{{ $comic->title }}">
          </div>
        </div>
      </div>
    </div>
    <div class="row d-flex justify-content-center pt-5">
      <div class="col-6">
        <div class="row single-comic-box">
          <div class="col-8">
            <h3 class="fw-bold text-uppercase mt-3">{{ $comic->title }}</h3>
            <div class="price-checker border-bottom border-dark my-4">
              <div class="row">
                <div class="col-8 d-flex justify-content-between border-end border-dark fw-bold py-3 px-4">
                  <span class="opaque-green">U.S. Price: <span class="text-white">${{ $comic->price }}</span></span>
                  <span class="opaque-green">AVAILABLE</span>
                </div>
                <div class="col-4 fw-bold py-3 px-4">
                  <span class="text-white">Check Availability <i class="fa-solid fa-sort-down"></i></span>
                </div>
              </div>
            </div>
            <p class="comic-description mt-3">{{ $comic->description}}</p>
          </div>
          <div class="col-4">
            <div class="d-flex justify-content-end w-100">
              <span class="text-body-tertiary fw-bold">ADVERTISEMENT</span>
            </div>
            <img src="../../img/adv.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row comic-spec-box d-flex justify-content-center w-100 p-0 m-0 py-4 pb-5 border-top border-light-subtle">
      <div class="col-6">
        <div class="row">
          <div class="col-6">
            <h5 class="blue-title border-bottom border-light-subtle pb-3 fw-bold">Talent</h5>
            <div class="row border-bottom border-light-subtle pb-2">
              <div class="col-3">
                <p class="blue-title">Art by:</p>
              </div>
              <div class="col-9">
                <a class="fw-bold text-decoration-none">{{join(", ",json_decode($comic["artists"]))}}</a>
              </div>
            </div>
            <div class="row border-bottom border-light-subtle pt-2 pb-2">
              <div class="col-3">
                <p class="blue-title">Written by:</p>
              </div>
              <div class="col-9">
                <a class="fw-bold text-decoration-none">{{join(", ",json_decode($comic["writers"]))}}</a>
              </div>
            </div>
          </div>
          <div class="col-6">
            <h5 class="blue-title border-bottom border-light-subtle pb-3 fw-bold">Specs</h5>
            <div class="row border-bottom border-light-subtle pb-1">
              <div class="col-3">
                <p class="blue-title">Series:</p>
              </div>
              <div class="col-9">
                <a class="fw-bold text-decoration-none text-uppercase">{{$comic->series}}</a>
              </div>
            </div>
            <div class="row border-bottom border-light-subtle pt-2 pb-1">
              <div class="col-3">
                <p class="blue-title">U.S. Price:</p>
              </div>
              <div class="col-9">
                <span class="text-decoration-none">${{ $comic->price }}</span>
              </div>
            </div>
            <div class="row border-bottom border-light-subtle pt-2 pb-1">
              <div class="col-3">
                <p class="blue-title">On Sale Date:</p>
              </div>
              <div class="col-9">
                <span class="text-decoration-none">{{  date('M d Y', strtotime($comic->sale_date)) }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.menu-banner')
@endsection