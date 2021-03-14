<?php

namespace Database\Factories;

use App\Models\Grade;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id_student = DB::table('students')->select('id')->inRandomOrder()->limit(1)->get();
        $id_course = DB::table('courses')->select('id')->inRandomOrder()->limit(1)->get();

        return [
            'id_student' => $id_student->first()->id,
            'id_course' => $id_course->first()->id,
            'grade' => $this->faker->numberBetween(0, 20),
        ];
    }
}
