<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class StudentUniqueRule implements Rule
{
    public function __construct(private string $domain)
    {
    }

    public function passes($attribute, $value)
    {
        return User::where('email', '=', $value . '@' . $this->domain)->doesntExist();
    }

    public function message()
    {
        return 'This account already exists.';
    }
}
