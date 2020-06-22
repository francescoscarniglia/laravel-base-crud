<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // sample data
        // $students = [
        //        [
        //            'name' => 'Francesco Scarniglia',
        //            'description'=> 'lorem ipsum',
        //            'age' => '32'
        //        ],
        //        [
        //         'name' => 'Francesco Verdi',
        //         'description'=> 'lorem ipsum',
        //         'age' => '30'
        //     ],
        //     [
        //         'name' => 'Francesco Rossi',
        //         'description'=> 'lorem ipsum',
        //         'age' => '28'
        //     ] 
        // ];

        // foreach($students as $student) {
        //     $newStudent = new Student();
        //     $newStudent->fill($student);
        //     $newStudent->save();
        // }

        // faker
        $records = 10;
        for( $i=0; $i < $records; $i++) {
            $newStudent = new Student ();
            $newStudent->name = $faker->name;
            $newStudent->description = $faker->paragraph(3, true);
            $newStudent->age = $faker->numberBetween(18, 40);
            $newStudent->save();
        }
    }
}
