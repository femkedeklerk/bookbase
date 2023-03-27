<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->exists;
    }

    public function view(User $user, Book $book): bool
    {
        return ($book->user_id == $user->id) || $user->isAdmin();
    }

    public function create(User $user): bool
    {
        return (true);
    }

    public function delete(User $user, Book $book): bool
    {
        return $book->user_id === $user->id;
        return true;
    }
}
