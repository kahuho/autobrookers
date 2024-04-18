<?php

// database/factories/CarFactory.php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'make' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet']),
            'model' => $this->faker->word,
            'year' => $this->faker->numberBetween(2000, 2022),
            'availability' => $this->faker->randomElement(['In Stock', 'Pening Import']),
            'current_location' => $this->faker->city,
            'mileage' => $this->faker->numberBetween(10000, 100000),
            'price' => $this->faker->numberBetween(5000, 50000),
            'description' => $this->faker->sentence,
            'drive' => $this->faker->randomElement(['2WD', '4WD']),
            'horse_power' => $this->faker->numberBetween(100, 500),
            'transmission' => $this->faker->randomElement(['Manual', 'Automatic']),
            'torque' => $this->faker->numberBetween(150, 400),
            'fuel_type' => $this->faker->randomElement(['Gasoline', 'Diesel', 'Hybrid']),
            'engine_size' => $this->faker->randomFloat(2, 1.0, 5.0),
            'accident_history' => $this->faker->boolean(20), // 20% chance of true
            'images' => $this->faker->image(storage_path('images'), 300, 200)
        ];
    }
}