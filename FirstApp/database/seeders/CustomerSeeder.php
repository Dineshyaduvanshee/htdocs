<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Customer;
use Faker\Factory as Faker;
class CustomerSeeder extends Seeder
{

    public function run(): void
{
    try {
        for($i=1;$i<=1000;$i++){
        $faker = Faker :: create();
        $customer = new Customer();
        $customer->name = $faker->name;
        $customer->email = $faker->email;      
        $customer->gender = "M";
        $customer->address = $faker->address;
        $customer->state = $faker->state;
        $customer->country = $faker->country;
        $customer->dob = date('Y-m-d');
        $customer->password = $faker->password;
        $customer->points = $faker->numberBetween(1, 100); // Adjust the range as per your requirements
        $customer->save();
        }
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
}

    // public function run(): void
    // {
    //     $Faker = Faker :: create();
    //     $customer = new Customer();
    //     $customer->name = $Faker->name;
    //     $customer->email = $Faker->email;      
    //     $customer->gender = "M";
    //     $customer->address = $Faker->address;
    //     $customer->state = $Faker->state;
    //     $customer->country = $Faker->country;
    //     $customer->dob = date('Y-m-d');
    //     $customer->password =$Faker->password;
    //     $customer->points = $Faker->numberBetween(1, 100); // Adjust the range as per your requirements
    //     $customer->save();
    // }

    // public function run(): void
    // {
    //     $Faker = Faker :: create();
    //     Customer::create([
    //         'name' => 'Dineshyaduvanshee_seeder',
    //         'email' => 'dineshyaduvansheer@gmail.com',
    //         'gender' => 'M',
    //         'address' => 'Mumbai',
    //         'state' => 'Maharashtra',
    //         'country' => 'India',
    //         'dob' => now(), // Assuming you want to set the current date and time
    //         'password' => bcrypt('123'), // Assuming you want to hash the password
    //         'status' => '1',
    //         'points' => '67',
    //     ]);
    // }
}

