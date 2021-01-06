<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@phizza.com',
            'password' => '12345',
            'address' => 'Jl. Kebon Jeruk',
            'phonenumber' => '081256347678',
            'gender' => 'Male',
            'role' => '1'
        ]);

        DB::table('users')->insert([
            'username' => 'Josha',
            'email' => 'josha@gmail.com',
            'password' => '78910',
            'address' => 'Jl. Kebon Nanas',
            'phonenumber' => '0872341234',
            'gender' => 'Female',
            'role' => '2'
        ]);
    }
}
