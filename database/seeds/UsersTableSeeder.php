<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'ajith',
            'email' => 'ajithacharyamulki@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ajith99720'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
