<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Category, Course, Post};
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('cursos');
        Storage::makeDirectory('cursos');
        User::factory(5)->create();
        Category::factory(3)->create();
        Course::factory(10)->create();
        Post::factory(90)->create();
    }
}
