<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        $data = Comic::all();
        return view("home", ["comics" => $data]);
    }
    public function show($id){
        $comic = Comic::findOrFail($id);
        return view('comic.show', compact('comic'));
    }
}
