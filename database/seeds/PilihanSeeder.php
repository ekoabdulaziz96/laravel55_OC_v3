<?php

use Illuminate\Database\Seeder;
use App\Pilihan;

class PilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             Pilihan::create([
            'id' => '1',
            'name' => 'cek',
            'text_name' => 'cek',
           
        ]);
    }
}
