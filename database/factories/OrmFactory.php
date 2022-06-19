<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Orm;

class OrmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Orm::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'company' => $this->faker->company(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address()
        ];
    }
}
