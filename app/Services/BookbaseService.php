<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class BookbaseService
{
    /**
     * Get domain based on route
     * @return string
     */
    public static function getDomain(): string
    {
        return request()->routeIs('admin.*') ?
            config('bookbase.admindomain') :
            config('bookbase.studentdomain');
    }

    public static function getStudents()
    {
        return User::query()
            ->where('email', 'like', '%' . config('bookbase.studentdomain'));
    }

    public static function getTeachers()
    {
        return User::query()
            ->where('email', 'like', '%' . config('bookbase.admindomain'));
    }

    public static function getStudentsWithBookStats()
    {
        return self::getStudents()
            ->withCount([
                'books as books_total',
                'books as books_pending' => function (Builder $query) {
                    $query->where('status', 'pending');},
                'books as books_accepted' => function (Builder $query) {
                    $query->where('status', 'accepted');},
                'books as books_rejected' => function (Builder $query) {
                    $query->where('status', 'rejected');},
            ]);
    }
}
