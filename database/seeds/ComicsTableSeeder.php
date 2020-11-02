<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $newComic = new Comic;
            $newComic->title = $faker->text(40);
            $newComic->original_title = $faker->text(50);
            $newComic->author = $faker->name();
            $newComic->pages = $faker->numberBetween(1,300);
            $newComic->edition = $faker->company();
            $newComic->price = $faker->randomFloat(2, 1, 999);
            $newComic->year = $faker->year();
            $newComic->color = (rand(0,1) == 1) ? "Colored" : "BnW";
            $newComic->n_comic = $faker->numberBetween(1,100);
            $newComic->image = $faker->imageUrl(150, 300);
            $newComic->save();
        }
    }
}