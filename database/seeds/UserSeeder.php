<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Surveyor',
            'email' => 'surveyor@app.com',
            'password' => Hash::make('password'), //password
            'role' => 'Surveyor'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('password'), //password
            'role' => 'Administrator'
        ]);

    }
}
