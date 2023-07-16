<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\HasProgressBar;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use HasProgressBar;

    public function run(): void
    {
        $this->command->warn('Seeding Demo Posts...');

        $this->withProgressBar(100, fn () => Post::factory()->create());
    }
}
