<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Post::Factory(100)->recycle(User::factory(20)->create())->create();

        Category::factory()->create([
            'title' => 'Web Pemograman',
            'slug' => 'web-pemograman',
        ]);
        
        Category::factory()->create([
            'title' => 'Mobile Pemograman',
            'slug' => 'mobile-pemograman',
        ]);
        Category::factory()->create([
            'title' => 'UI/UX',
            'slug' => 'UI-UX',
        ]);
        
    }
}
