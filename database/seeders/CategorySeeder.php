<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology',
            'Fashion',
            'Travel',
            'Food',
            'Health and Fitness',
            'Sports',
            'Entertainment',
            'Lifestyle',
            'Finance',
            'Education',
        ];

        collect($categories)
            ->each(fn ($category) => Category::factory()->create(['name' => $category]));
    }
}
