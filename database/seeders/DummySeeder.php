<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Vendor;

class DummySeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        Admin::create([
            "logo" => "dummy.png",
            "f_name" => "tamil",
            "l_name" => "v",
            "email" => "admin@gmail.com",
            "password" => "admin@123"
        ]);
    }
}
