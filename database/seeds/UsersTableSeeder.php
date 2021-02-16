<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $article = new Article();
            $article->title = $faker->word;
            $article->subtitle = $faker->word;
            $article->paragraph = $faker->paragraph();
            $article->author = $faker->name(2);
            $article->save();
        }
    }
}
