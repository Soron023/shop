<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.

     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Category::truncate();
 
        $faker = \Faker\Factory::create();
 
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 20; $i++) {
            Category::create([
                'name' => $faker->sentence,
                'description' => $faker->sentence,
            ]);
        }
    }
}
