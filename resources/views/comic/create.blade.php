@extends('layouts.public')
@section('title', 'Submit A New Comic')
@section('content')
  <div class="container comic-submit">
    <div class="row py-5">
      <form action={{ route('comic.store') }} method="POST">
        @csrf()
        <div class="mb-3">
          <label class="form-label fw-bold fs-5" autofocus required>Title</label>
          <input type="text" class="form-control" name="title">
          <div class="form-text">The comic's title</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Description</label>
          <textarea class="form-control" maxlength="255" name="description"></textarea>
          <div class="form-text">A brief description of the comic</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Comic's cover link</label>
          <input type="text" class="form-control" name="thumb">
          <div class="form-text">A link to the comic's cover</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Price</label>
          <input type="text" class="form-control"  name="price">
          <div class="form-text">Comic's last known price</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Series</label>
          <input type="text" class="form-control"  name="series">
          <div class="form-text">To whose series the comic belongs</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Release date</label>
          <input type="date" class="form-control" name="sale_date">
          <div class="form-text">Comic's release date</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Genre</label>
          <input type="text" class="form-control"  name="type">
          <div class="form-text">The comic's genre</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Artists</label>
          <input type="text" class="form-control"  name="artists">
          <div class="form-text">Artists who collaborated on the comics development</div>
        </div>
        <div class="mb-3">
          <label class="form-label fw-bold fs-5">Writers</label>
          <input type="text" class="form-control"  name="writers">
          <div class="form-text">Writers who collaborated on the comics development</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit a new comic!</button>
      </form>
      <a href={{ route("homepage")}} class="mt-2"><button class="btn btn-danger">Back</button></a>

    </div>
  </div>
  
@endsection