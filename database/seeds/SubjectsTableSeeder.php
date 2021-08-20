<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = ['id'=>'1','subject'=>'国語'];

        DB::table('subjects')->insert($subject);
        
        
        $subject = ['id'=>'2','subject'=>'数学'];

        DB::table('subjects')->insert($subject);
        
        
        $subject = ['id'=>'3','subject'=>'理科'];

        DB::table('subjects')->insert($subject);
        
        
        $subject = ['id'=>'4','subject'=>'社会'];

        DB::table('subjects')->insert($subject);
        
        

    }

}