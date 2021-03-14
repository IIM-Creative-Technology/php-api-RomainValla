<?php

namespace Database\Factories;

use App\Models\Course;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start_date = $this->faker->dateTimeBetween('next Monday', '+30 days')->format('Y-m-d');
        $end_date = $this->faker->dateTimeBetween($start_date, $start_date . '+5 days')->format('Y-m-d');
        $id_teacher = DB::table('teachers')->select('id')->inRandomOrder()->limit(1)->get();
        $id_year = DB::table('classes')->select('id')->inRandomOrder()->limit(1)->get();

        return [
            'name' => $this->faker->sentences($nbWords = 4, $variableNbWords = true),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'id_teacher' => $id_teacher->first()->id,
            'id_year' => $id_year->first()->id,
        ];
    }
}
