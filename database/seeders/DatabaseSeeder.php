<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use App\Traits\HasProgressBar;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;

class DatabaseSeeder extends Seeder
{
    use HasProgressBar;

    public function run(): void
    {
        $this->command->warn('Seeding demo admin...');
        $this->withProgressBar(1, fn () => User::factory()->create(['email' => 'k@test.com']));

        $this->command->warn('Seeding demo categories...');
        $this->seedCategories();

        $this->command->warn('Seeding demo posts...');
        $this->withProgressBar(100, fn () => Post::factory()->create()->categories()->attach(Category::inRandomOrder()->first()));

        $this->command->warn('Seeding demo projects...');
        $this->seedProjects();
    }

    public function seedProjects(): void
    {
        $projects = collect([
            [
                'name' => 'TailwindCSS',
                'brief' => 'Rapidly build modern websites without ever leaving your HTML.',
            ],
            [
                'name' => 'Maizzle',
                'brief' => 'Framework for Rapid Email Prototyping.',
            ],
            [
                'name' => 'Alpine.js',
                'brief' => 'Think of it like Tailwind for JavaScript.',
            ],
            [
                'name' => 'PostCSS',
                'brief' => 'A tool for transforming CSS with JavaScript',
            ],
        ]);

        $progressBar = new ProgressBar($this->command->getOutput(), $projects->count());

        $progressBar->start();

        $projects->each(function ($project) use ($progressBar) {
            Project::factory()->create($project);
            $progressBar->advance();
        });

        $progressBar->finish();

        $this->command->getOutput()->writeln('');
    }

    private function seedCategories(): void
    {
        $categories = collect([
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
        ]);

        $progressBar = new ProgressBar($this->command->getOutput(), $categories->count());

        $progressBar->start();

        $categories->each(function ($category) use ($progressBar) {
            Category::factory()->create(['name' => $category]);
            $progressBar->advance();
        });

        $progressBar->finish();

        $this->command->getOutput()->writeln('');
    }
}
