<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BooksAdminCreateCommand extends Command
{
    protected $signature = 'books:admin-create';

    protected $description = 'Command description';

    public function handle()
    {
        $this->info('Enter teachers info');
        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $password = Str::password(8);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
        $user->markEmailAsVerified();
        $this->comment('New user account created');
        $this->comment('password: ' . $password);
    }
}
