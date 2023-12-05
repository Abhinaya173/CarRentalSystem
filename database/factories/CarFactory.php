<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->word(),
            'merk' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan']),
            'model' => $this->faker->word(),
            'transmisi' => $this->faker->randomElement(['Manual', 'Matic']),
            'tahun' => $this->faker->year(),
            'kursi' => $this->faker->numberBetween(4, 6),
            'biaya_sewa' => $this->faker->randomFloat(2, 50, 500),
            'image_url' => $this->faker->imageUrl(450, 300, 'transport'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}