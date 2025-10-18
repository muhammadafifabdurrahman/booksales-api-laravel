<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\returnArgument;

class GenreController extends Controller
{
  public function index()
  {
    $genres = Genre::all();

    if ($genres->isEmpty()) {
      return response()->json([
        "success" => true,
        "message" => "Resource data not found!"
      ], 200);
    }

    return response()->json([
      "success" => true,
      "message" => "Get all resources",
      "data" => $genres
    ]);
  }

  public function store(Request $request)
  {
    //1. validator
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:100',
      'description' => 'required|string|max:100'

    ]);


    //2. cek validator error
    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors()
      ], 422);
    }


    //3. upload image



    //4. insert data
    $genre = Genre::create([
      'name' => $request->name,
      'description' => $request->description,
    ]);


    //5. response
    return response()->json([
      'success' => true,
      'message' => 'Resource added successfully',
      'data' => $genre
    ], 201);
  }

  //SHOW
  public function show(string $id)
  {
    $genre = Genre::find($id);

    if (!$genre) {
      return response()->json([
        'success' => false,
        'message' => 'resource not found',
      ], 404);
    }

    return response()->json([
      'success' => true,
      'message' => 'Get detail resource',
      'data' => $genre
    ], 200);
  }

  //UPDATE
  public function update(string $id, Request $request)
  {
    //1. mencari data
    $genre = Genre::find($id);

    if (!$genre) {
      return response()->json([
        'success' => false,
        'message' => 'Resource not found'
      ], 404);
    }


    //2. validator
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:100',
      'description' => 'required|string|max:100'

    ]);

    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => 'Resource not found'
      ], 404);
    }


    //3. menyiapkan data yg ingin di uppdate
    $data = [
      'name' => $request->name,
      'description' => $request->description,
    ];


    //4. handle image -> (upload $ delete image)


    //5. update data baru ke database
    $genre->update($data);
    return response()->json([
      'success' => true,
      'message' => 'Resource update successfully',
      'data' => $genre
    ], 200);

  }

  //DESTROY
    public function destroy(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete resource successfully'
        ]);
    }
}
