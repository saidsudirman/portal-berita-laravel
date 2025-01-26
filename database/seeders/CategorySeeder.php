<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Skandal',
            'slug' => 'skandal',
            'color'=> 'red',
        ]);
        Category::create([
            'name' => 'UKM',
            'slug' => 'ukm',
            'color'=>'green',
        ]);
        Category::create([
            'name' => 'Akademik Kampus',
            'slug' => 'akademik_kampus',
            'color'=> 'blue'
        ]);
        Category::create([
            'name' => 'Ricuh',
            'slug' => 'ricuh',
            'color'=> 'yellow'
        ]);
    }
}
