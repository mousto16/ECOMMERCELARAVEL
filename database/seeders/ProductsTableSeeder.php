<?php

namespace Database\Seeders;

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i=0; $i < 30; $i++) { 
            DB::table('products')->insert([
                'title' => $faker->sentence(4),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(5),
                'description' => $faker->text,
                'price' => $faker->numberBetween(15, 300)*100,
                'image' =>'https://via.placeholder.com/200x2.jpg%20C/O%20https://placeholder.com/'
            ]);
        }
    }
}
