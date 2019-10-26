<?php

use App\Models\NewsTag;
use Illuminate\Database\Seeder;

class NewsTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(NewsTag::class, 10)->create();
    }
}
