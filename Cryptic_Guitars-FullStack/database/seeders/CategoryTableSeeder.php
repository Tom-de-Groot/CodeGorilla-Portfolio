<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electric',
                'image_source'  => 'electric-card.jpg',
            ],
            
            [
                'name' => 'Bass',
                'image_source'  => 'bass-card.jpg',
            ],
        ]);

        
    }
}
