<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Apps',
            'slug' => 'web-apps'
        ]);

        Category::create([
            'name' => 'Artificial Intelegens',
            'slug' => 'artificial-intelegens'
        ]);
    }
}
