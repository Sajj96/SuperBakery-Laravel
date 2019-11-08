<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Sajj Abuu',
            'email' => 'captainsajjad4@gmail.com',
            'password' => Hash::make('wsedrf'),
            'remember_token' => str_random(10),
        ]);
    }
}
