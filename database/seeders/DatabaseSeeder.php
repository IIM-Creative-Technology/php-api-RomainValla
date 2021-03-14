<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classe;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Grade;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        User::factory(10)->create();

        DB::table('classes')->truncate();
        Classe::factory(10)->create();

        DB::table('students')->truncate();
        Student::factory(10)->create();

        DB::table('teachers')->truncate();
        Teacher::factory(10)->create();

        DB::table('courses')->truncate();
        Course::factory(10)->create();

        DB::table('grades')->truncate();
        Grade::factory(10)->create();
    }
}
