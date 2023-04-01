<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Services\BookbaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function students(Request $request)
    {
        $studentsQuery = BookbaseService::getStudentsWithBookStats();
        $search = trim($request->get('q'));
        if (!empty($search)) {
            $studentsQuery->where('name', 'like', '%' . $request->get('q') . '%');
        }
        return view('admin.studentlist', [
            'students' => $studentsQuery->get(),
            'q' => $search
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
