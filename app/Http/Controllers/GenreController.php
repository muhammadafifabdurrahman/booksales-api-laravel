<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class GenreController extends Controller
{
    public function index() {
       $genres = Genre::all();

       return response()->json([
        "success" => true,
        "message" => "Get all resources",
        "data" => $genres
       ], 200);
    }
}
