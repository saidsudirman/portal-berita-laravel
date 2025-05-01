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
    public function run()
    {
        // Menambahkan kategori jika belum ada
        Category::firstOrCreate([
            'slug' => 'skandal',
        ], [
            'name' => 'Skandal',
            'color' => 'red',
        ]);
    
        Category::firstOrCreate([
            'slug' => 'ukm',
        ], [
            'name' => 'UKM',
            'color' => 'green',
        ]);
    
        Category::firstOrCreate([
            'slug' => 'akademik_kampus',
        ], [
            'name' => 'Akademik Kampus',
            'color' => 'blue',
        ]);
    
        Category::firstOrCreate([
            'slug' => 'ricuh',
        ], [
            'name' => 'Ricuh',
            'color' => 'yellow',
        ]);
    }
    
}
