<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_code')->nullable();
            $table->string('name_th')->nullable();
            $table->string('name_eng')->nullable();
            $table->string('nick_name')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('line')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('position')->nullable();
            $table->text('work_description')->nullable();
            $table->string('profile_image')->nullable();
            $table->bigInteger('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
