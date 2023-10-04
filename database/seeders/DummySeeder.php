<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DummySeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for($index=0; $index<10; $index++) {
            $token = 'products';
            $imagePath = $faker->image(storage_path('app/public/products'), 500, 500);
            if (($offset = strpos($imagePath, $token)) !== false) {
                $imagePath = substr($imagePath, $offset);
            }

            Category::create([
                "name" => $faker->word(),
                "image" => $imagePath
            ]);

            echo $index;
        }
    }
}
