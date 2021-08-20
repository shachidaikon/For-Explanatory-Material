<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->primary(['student_id', 'subject_id']);
            
            $table->foreign('student_id')
                  ->references('id')
                  ->on('students');
                
            $table->foreign('subject_id')
                  ->references('id')
                  ->on('subjects');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_subject');
    }
}
