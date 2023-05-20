<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
            'name' => 'John Doe',
            'avatar'=>"https://th.bing.com/th/id/OIP.KGdLPsiqGjKqCYuhzhmmWgHaEP?pid=ImgDet&rs=1",
            'email' => 'johndoe@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'client',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data if needed
        DB::table('users')->insert([
            'name' => 'John Doe',
            'avatar'=>"https://img.freepik.com/free-vector/vector-avatar-smiling-man-facial-expression_102172-203.jpg?size=338&ext=jpg",
            'email' => 'johndoe1@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'client',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe2@example.com',
            'avatar'=>"https://th.bing.com/th/id/OIP.DU3kqJmwpKSmWtoJLcwdSAHaHa?pid=ImgDet&rs=1",
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'admin',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe3@example.com',
            'avatar'=>"https://th.bing.com/th/id/OIP.rO1pKb1aoqGqwvHsr26zJQAAAA?pid=ImgDet&w=200&h=200&rs=1",
            'email_verified_at' => now(),
            'password' => Hash::make('12341234'),
            'role' => 'admin',
            'status' => 'desactive',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // ...
    }
}
