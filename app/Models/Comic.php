<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
  use HasFactory, SoftDeletes;

  protected $casts = [
    "sale_date" => "date",
    /* "artists" => "array",
    "writers" => "array" */
  ];

  protected $fillable = [
    "title",
    "description",
    "thumb",
    "price",
    "series",
    "sale_date",
    "type",
    "writers",
    "artists"
  ];
}
