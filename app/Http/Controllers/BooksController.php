<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\CreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function index()
    {
        return view('books.index', [
            'books' => Auth::user()->books
        ]);
    }

    public function create()
    {
    }

    public function store(CreateRequest $request)
    {
        Auth::user()->books()->create($request->all());
        return back();
    }

    public function show(Book $book)
    {
    }

    public function edit(Book $book)
    {
    }

    public function update(Request $request, Book $book)
    {
    }

    public function destroy(Request $request)
    {
        $book = Book::findOrFail($request->book);
        if ($book->user_id == Auth::user()->id) {
            $book->delete();
        }
        return back();
    }
}
