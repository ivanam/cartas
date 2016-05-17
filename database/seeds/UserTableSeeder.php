<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        User::create([
            'first_name' => 'System',
            'last_name'  => 'Administrator',
            'username'   => 'admin',
            'email'      => 'postmaster@domain.com',
            'password'   =>  Hash::make('secret')
        ]);
    }
 
}