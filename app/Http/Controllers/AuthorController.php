<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
  public function index()
  {
    $authors = Author::all();

    if ($authors->isEmpty()) {
      return response()->json([
        "success" => true,
        "message" => "Resource data not found!"
      ], 200);
    }

    return response()->json([
      "success" => true,
      "message" => "Get all resources",
      "data" => $authors
    ]);
  }

  public function store(Request $request)
  {
    //1. validator
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:100',
      'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
      'bio' => 'required|string|max:100'

    ]);


    //2. cek validator error
    if ($validator->fails()) {
      return response()->json([
        'success' => false,
        'message' => $validator->errors()
      ], 422);
    }


    //3. upload image
    $image = $request->file('photo');
    $image->store('authors', 'public');


    //4. insert data
    $author = Author::create([
      'name' => $request->name,
      'photo' => $image->hashName(),
      'bio' => $request->bio,
    ]);


    //5. response
    return response()->json([
      'success' => true,
      'message' => 'Resource added successfully',
      'data' => $author
    ], 201);
  }

  //SHOW
  public function show(string $id)
  {
    $author = Author::find($id);

    if (!$author) {
      return response()->json([
        'success' => false,
        'message' => 'resource not found',
      ], 404);
    }

    return response()->json([
      'success' => true,
      'message' => 'Get detail resource',
      'data' => $author
    ], 200);
  }

  //UPDATE
  public function update(string $id, Request $request)
  {
    //1. mencari data
    $author = Author::find($id);

    if (!$author) {
      return response()->json([
        'success' => false,
        'message' => 'Resource not found'
      ], 404);
    }


    //2. validator
    $validator = Validator::make($request->all(), [
      'name' => 'required|string|max:100',
      'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
      'bio' => 'required|string|max:100'

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
      'bio' => $request->bio,
    ];


    //4. handle image -> (upload $ delete image)
    if ($request->hasFile('cover_photo')) {
      $image = $request->file('cover_photo');
      $image->store('books', 'public');

      if ($author->photo) {
        Storage::disk('public')->delete('authors/' . $author->photo);
      }

      $data['photo'] = $image->hashName();
    }


    //5. update data baru ke database
    $author->update($data);
    return response()->json([
      'success' => true,
      'message' => 'Resource update successfully',
      'data' => $author
    ], 200);

  }

  //DESTROY
    public function destroy(string $id) {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'resource not found',
            ], 404);
        }

        if ($author->photo) {
            //delete from storage
            Storage::disk('public')->delete('authors/' . $author->photo);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete resource successfully'
        ]);
    }
}