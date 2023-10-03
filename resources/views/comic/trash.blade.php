@extends('layouts.public')
@section('title', 'Delete Comic')
@section('content')
@php
    $chars = ['[', ']', '"'];
@endphp
  <div class="home-jumbo">
    <div class="background-image"></div>
    <div class="row thumb-container d-flex justify-content-center">
      <div class="col-6 position-relative d-flex justify-content-between align-items-center">
        <span class="text-white fs-2 fw-bold">DELETED COMICS</span>
        <div>
          <a href={{ route("homepage") }} class="btn btn-danger"><span class="text-white fs-5 fw-bold">BACK</span></a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center py-4">
        <div class="col-10">
          <div class="row d-flex justify-content-center">
            @foreach ($comics as $singleComic)
              <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <a class="text-decoration-none">
                  <div class="card bg-transparent border-0 rounded-0 h-100 position-relative">
                    <div class="deleted-comic-card">
                      <img src="{{$singleComic->thumb ? $singleComic->thumb : "https://static.thenounproject.com/png/908418-200.png" }}" class="card-img-top border-0 rounded-0" alt="{{ $singleComic["title"] }}" title="{{ $singleComic["title"] }}">
                      <div class="card-body posionated-delete text-white position-absolute d-flex flex-wrap justify-content-center align-items-end h-100">
                        <p class="card-text text-uppercase fw-bold fs-5 text-center">{{ $singleComic['title'] }}</p>
                        {{-- <strong>{{ ucfirst($singleComic->type) }}</strong> --}}
                        <form action="{{ route('comic.destroy', ["id" => $singleComic->id, "force" => true]) }}" method="POST" class="d-inline-block">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger text-uppercase fw-bold">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.menu-banner')
@endsection