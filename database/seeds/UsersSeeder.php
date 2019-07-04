<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             User::create([
            'nama' => 'eko',
            'email' => 'e@a.com',
            'status' => 'admin',            
            'password' => bcrypt('123456'),
        ]);
    }
}
