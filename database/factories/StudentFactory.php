<?php

namespace Database\Factories;

use App\Models\Student;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $years = DB::table('classes')->select(['id', 'year'])->inRandomOrder()->limit(1)->get();

        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween($min = 18, $max = 50),
            'start_year' => date('Y', strtotime( $years[0]->year . '-01-01 -5 years')),
            'id_year' => $years[0]->id,
        ];
    }
}
