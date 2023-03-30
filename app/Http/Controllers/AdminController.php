<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Services\BookbaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function students()
    {
        return view('admin.studentlist', [
            'students' => BookbaseService::getStudentsWithBookStats()->get()
        ]);
    }

    public function student(User $student)
    {
        return view('admin.studentdetail', [
            'student' => $student
        ]);
    }

    public function updateBook(Book $book, Request $request)
    {
        $book->status = $request->get('status');
        $book->save();
        return Redirect::back();
    }
}
