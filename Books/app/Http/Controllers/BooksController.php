<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    
    public function showAllBooks()
    {
        return response()->json(Books::all());
    }

    public function showOneBook($id)
    {
        return response()->json(Books::find($id));
    }

    public function create(Request $request)
    {
        $book = Books::create($request->all());

        return response()->json($book, 201);
    }

    public function update($id, Request $request)
    {
        $book = Books::findOrFail($id);
        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function delete($id)
    {
        Books::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}