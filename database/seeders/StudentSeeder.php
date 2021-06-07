<?php

namespace Database\Seeders;

use App\Student;
use App\Subject;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $subjects;

    public function run()
    {
        $this->fetchRelations();

        foreach (range(1, 30) as $i) {
            $this->createRandomStudent();
        }
    }

    public function fetchRelations()
    {
        $this->subjects = Subject::all();
    }

    public function createRandomStudent()
    {
        $student = Student::factory()->create();

        $student->subjects()->attach($this->subjects->random(rand(1, 6)));

    }
}
