<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Admin', 
                'email' => 'admin@mail.com', 
                'password' => bcrypt('123456'), 
            ],
            [
                'name' => 'Dede Rusliandi', 
                'email' => 'dede.rusliandi1@gmail.com', 
                'password' => bcrypt('123456'), 
            ],
            [
                'name' => 'Hadian Rahmat', 
                'email' => 'hadian.rahmat1@gmail.com', 
                'password' => bcrypt('123456'), 
            ],
        ]);
    }
}
