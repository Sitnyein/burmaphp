<?php

namespace Database\Factories;

use Database\Factories\CustomerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $address=['yagon','mandalay','pyay','pago','hpa-an','Bagan'];
        return [
          'title'=> $this->faker->sentence(3),
          'description'=> $this->faker->text(1000),
           'fee' => rand(2000,50000),
           'address'=>$address[array_rand($address)],
           'rating'=>rand(0,5)
        ];
    }
}
