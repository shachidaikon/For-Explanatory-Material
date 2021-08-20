<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = ['id'=>'1','grade'=>'2','name'=>'Ryo', 'age'=>'18'];

        DB::table('students')->insert($student);
        
        
        $student = ['id'=>'2','grade'=>'2','name'=>'Mel', 'age'=>'15'];

        DB::table('students')->insert($student);
        
        
        $student = ['id'=>'3','grade'=>'1','name'=>'Tim', 'age'=>'16'];

        DB::table('students')->insert($student);
        
        
        $student = ['id'=>'4','grade'=>'4','name'=>'Al', 'age'=>'12'];

        DB::table('students')->insert($student);
        
        
    }
}
