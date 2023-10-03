@extends('layouts.public')
@section('title', 'Edit A Comic')
@section('content')
@php
    $chars = ['[', ']', '"'];
@endphp
  <div class="container comic-submit">
    <div class="row py-5">
      <form action={{ route('comic.show', ['id' => $comic->id]) }} method="POST">
        @csrf()
        @method("put")
        <div class="mb-3">
          <label class="form-label fw-bold fs-5" autofocus required>Title</label>
          <input type="text" class="form-control" name="title" value="{{ old("title", $comic->title) }}">
          <div class="form-text">The comic's title</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Description</label>
          <textarea class="form-control" maxlength="255" name="description">{{ old("description", $comic->description) }}</textarea>
          <div class="form-text">A brief description of the comic</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Comic's cover link</label>
          <input type="text" class="form-control" name="thumb" value="{{ old("thumb", $comic->thumb) }}">
          <div class="form-text">A link to the comic's cover</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Price</label>
          <input type="text" class="form-control"  name="price" value="{{ old("price", $comic->price) }}">
          <div class="form-text">Comic's last known price</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Series</label>
          <input type="text" class="form-control" name="series" value="{{ old("series", $comic->series) }}">
          <div class="form-text">To whose series the comic belongs</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Release date</label>
          <input type="date" class="form-control" name="sale_date" value="{{ old("sale_date", $comic->sale_date) }}">
          <div class="form-text">Comic's release date</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Genre</label>
          <input type="text" class="form-control" name="type" value="{{ old("type", $comic->type) }}">
          <div class="form-text">The comic's genre</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Artists</label>
          <input type="text" class="form-control" name="artists" value="{{ $comic->artists ? old("artists", str_replace($chars, '', $comic['artists'])) : "" }}">
          <div class="form-text">Artists who collaborated on the comics development</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Writers</label>
          <input type="text" class="form-control" name="writers" value="{{ $comic->writers ? old("writers", str_replace($chars, '', $comic['writers'])) : "" }}">
          <div class="form-text">Writers who collaborated on the comics development</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Complete the Comic's editing!</button>
      </form>
      <a href={{ route("comic.show", $comic->id)}} class="mt-2"><button class="btn btn-danger">Back</button></a>

    </div>
  </div>
  
@endsection