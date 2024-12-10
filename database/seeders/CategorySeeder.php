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
        Category::factory()->create([
            'name' => 'perkuliahan',
            'slug' => 'perkuliahan'
        ]);
        Category::factory()->create([
            'name' => 'Dunia Otomotif',
            'slug' => 'Dunia-Otomotif'
        ]);
        Category::factory()->create([
            'name' => 'Dunia Kerja',
            'slug' => 'Dunia-Kerja'
        ]);
    }
}
