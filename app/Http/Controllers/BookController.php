<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::with('stores')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'isbn' => 'required|unique:books',
            'value' => 'required|numeric',
        ]);

        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function show(Book $book)
    {
        return $book->load('stores');
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'value' => 'required|numeric',
        ]);

        $book->update($request->all());

        return response()->json($book, 200);
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
