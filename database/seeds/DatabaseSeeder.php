<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(FormsSeeder::class);
         $this->call(PilihanSeeder::class);
         $this->call(ContactsTableSeeder::class);
         $this->call(KategoriSeeder::class);
         
         $this->call(StatusSeeder::class);
    }
}
