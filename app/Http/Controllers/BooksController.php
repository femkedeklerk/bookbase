<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\CreateRequest;
use App\Models\Book;
use App\Services\BookbaseService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Book::class);
    }

    public function index()
    {
        return view('books.index', [
            'books' => Auth::user()->books,
            'teachers' => BookbaseService::getTeachers()->orderBy('name')->get()
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): RedirectResponse
    {
//        $this->authorize('create', Book::class);

        // The current user can create books

        return redirect('/books');
    }

    public function store(CreateRequest $request)
    {
        Auth::user()->books()->create($request->validated());
        return back();
    }

    public function destroy(Book $book)
    {
//        xdebug_break();
//        $a=1;
        if ($book->user_id == Auth::user()->id) {
            if ($book->delete()) {
                session()->flash('alert-success', __('Book deleted'));
            }
        }
        return back();
    }
}
