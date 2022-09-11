<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create();

        for ($i=0; $i <100 ; $i++) { 
            $customer = new Customer;
            $customer->full_name = $faker->name;
            $customer->email = $faker->email;
            $customer->phone_number = '+923184133228';
            $customer->age = '25';
            $customer->address = $faker->address;
            $customer->password = md5($faker->password);
            $customer->save();
        }
    }
}
