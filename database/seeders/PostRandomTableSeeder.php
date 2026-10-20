<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostRandomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 25; $i++) {
            Post::create([
                'title'       => fake()->sentence(4),
                'description' => fake()->paragraph(),
                'status'      => 'published',
            ]);
        }
    }
}
