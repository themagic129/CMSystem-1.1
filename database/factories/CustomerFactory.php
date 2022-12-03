<?php

namespace Database\Factories\Models;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function run()
    {
       Customer::factory()
       ->count(50)
       ->hasCustomer(1)
       ->create();
    }
}
