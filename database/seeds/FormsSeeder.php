<?php

use Illuminate\Database\Seeder;
use App\Form;

class FormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             Form::create([
            'name'=>'shalat_dhuha', 
            'text_name'=>'shalat Dhuha', 
            'placeholder'=> 'ya/tidak',
            'status'=>'manager', 
            'category'=>'text',
            'posisi'=>'head',
            'id_pilih' =>'1'
        ]);
    }
}
