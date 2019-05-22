<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        $password = Hash::make('secret');

        User::create([
            'name'          => 'Admin',
            'phone'         => '11111111',
            'email'         => 'admin@test.com',
            'password'      => $password,
            'sexo'          => 'M',
            'state'         => 'Florida',
            'city'          => 'Tampa',
            'number'        => '2336524',
            'postal_code'   => '2336524',
            'role'          => 2
        ]);
        User::create([
            'name' => 'User',
            'phone' => '22331144',
            'email' => 'user@test.com',
            'password' => $password,
            'sexo'          => 'M',
            'state'         => 'Florida',
            'city'          => 'Tampa',
            'number'        => '2336524',
            'postal_code'   => '2336524',
            'role' => 1
        ]);
    }
}
