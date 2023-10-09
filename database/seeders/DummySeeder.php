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

        Vendor::create([
            "logo" => "empty.png",
            "company_name" => "empty.png",
            "owner_name" => "empty.png",
            "phone_1" => "empty.png",
            "phone_2" => "empty.png",

            "country" => "empty.png",
            "state" => "empty.png",
            "zip" => "empty.png",
            "city" => "empty.png",

            "address_1" => "empty.png",
            "address_2" => "empty.png",
            
            "email" => "empty@gmail.com",
            "password" => "empty@123",
        ]);
    }
}
