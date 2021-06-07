<?php

namespace Database\Seeders;

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::factory()->create(['name' => 'Mates']);
        Subject::factory()->create(['name' => 'Lengua']);
        Subject::factory()->create(['name' => 'Ciencias Naturales']);
        Subject::factory()->create(['name' => 'Ciencias Sociales']);
        Subject::factory()->create(['name' => 'Fisica y quimica']);
        Subject::factory()->create(['name' => 'Educacion Fisica']);
    }
}
