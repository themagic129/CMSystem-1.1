<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'cedula' => $this->faker->creditCardNumber(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),            
            'status' => $this->faker->randomElement(['activo','inactivo']),
            'email_verified_at' =>now(),
           
        ];
    }
}
