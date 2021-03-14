<?php

namespace Database\Factories;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['A1','A2','A3','A4','A5']),
            'year' => $this->faker->dateTimeBetween( $start_date = '-3 years', $end_date = 'now +4 years')->format('Y'),
        ];
    }
}
