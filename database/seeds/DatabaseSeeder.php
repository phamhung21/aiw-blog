<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(NewsTagTableSeeder::class);
        
    }
}
