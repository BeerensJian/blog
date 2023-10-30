<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create();
        $category = Category::factory()->create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $user2 = User::factory()->create();
        $category2 = Category::factory()->create([
            "name" => 'Work',
            'slug' => 'work'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $category->id
        ]);

        Post::factory(4)->create([
            'user_id' => $user2->id,
            'category_id' => $category2->id
        ]);


    }
}
