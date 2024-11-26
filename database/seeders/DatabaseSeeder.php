<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'title' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $work = Category::create([
        //     'title' => 'Work',
        //     'slug' => 'work'
        // ]);

        // $hobbies = Category::create([
        //     'title' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>lorem ipsum</p>',
        //     'body' => '<p>Lorem ipsum dolar sit amet</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>lorem ipsum</p>',
        //     'body' => '<p>Lorem ipsum dolar sit amet</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobbies->id,
        //     'title' => 'My Hobbies Post',
        //     'slug' => 'my-hobbies-post',
        //     'excerpt' => '<p>lorem ipsum</p>',
        //     'body' => '<p>Lorem ipsum dolar sit amet'
        // ]);
    }
}
