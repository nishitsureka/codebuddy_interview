<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nishit123'.time(),
            'email' => 'doejohn'.time().'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
