<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
  public function index()
  {
    $data = Comic::all();
    return view("home", ["comics" => $data]);
  }

  public function trash() {
    $data = Comic::onlyTrashed()->get();
    return view("comic.trash", ["comics" => $data]);
  }

  public function show($id)
  {
    $comic = Comic::findOrFail($id);
    return view('comic.show', compact('comic'));
  }

  public function create()
  {
    return view("comic.create");
  }

  public function store(Request $request)
  {
    $data = $request->validate([
      "title" => "required|string|max:255",
      "description" => "required|string",
      "thumb" => "nullable|string|max:255",
      "price" => "required||decimal:0,2",
      "series" => "required|string|max:255",
      "sale_date" => "nullable|before_or_equal:today",
      "type" => "nullable|string|max:255",
      "artists" => "nullable|string",
      "writers" => "nullable|string"
    ]);

    /* $data["artists"] = explode(', ', $data["artists"]);
    $data["writers"] = explode(', ', $data["writers"]); */
    $data["artists"] = json_encode([$data["artists"]]);
    $data["writers"] = json_encode([$data["writers"]]);

    $newComic = new Comic();

    /* $newComic->fill($data); */

    $newComic->title = $data["title"];
    $newComic->description = $data["description"];
    $newComic->thumb = $data["thumb"];
    $newComic->price = $data["price"];
    $newComic->series = $data["series"];
    $newComic->sale_date = $data["sale_date"];
    $newComic->type = $data["type"];
    $newComic->writers = $data["writers"];
    $newComic->artists = $data["artists"];

    $newComic->save();

    return redirect()->route('comic.show', $newComic->id);
  }

  public function edit($id){
    $comic = Comic::findOrFail($id);
    return view("comic.edit", ["comic" => $comic]);
  }

  public function update(Request $request, $id) {
    $comic = Comic::findOrFail($id);

    // senza validazione
    // $data = $request->all();

    $data = $request->validate([
      "title" => "required|string|max:255",
      "description" => "required|string",
      "thumb" => "nullable|string|max:255",
      "price" => "required||decimal:0,2",
      "series" => "required|string|max:255",
      "sale_date" => "nullable|before_or_equal:today",
      "type" => "nullable|string|max:255",
      "artists" => "nullable|string",
      "writers" => "nullable|string"
    ]);

    /* l'argomento di json_encode deve essere solo l'oggetto da convertire!!!!!
    $data["artists"] = json_encode(",", $data["artists"]);
    $data["writers"] = json_encode(",", $data["writers"]); */

    $data["artists"] = json_encode($data["artists"]);
    $data["writers"] = json_encode($data["writers"]);

    // Si comporta come un fill() + save()
    $comic->update($data);

    // $comic->save();

    return redirect()->route('comic.show', $comic->id);
  }

  public function destroy(Request $request, $id) {

    if ($request->input("force")) {
        $comic = Comic::onlyTrashed()->where("id", $id)->first();

        // delete permanente e definitivo
        $comic->forceDelete();
    }else{
        $comic = Comic::findOrFail($id);

        // soft delete
        $comic->delete();
    }

    return redirect()->route('homepage');
  }
}
