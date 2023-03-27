<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\BookbaseService;

class AdminController extends Controller
{
    public function students()
    {
        return view('admin.students', [
            'students' => BookbaseService::getStudentsWithBookStats()->get()
        ]);
    }
}
