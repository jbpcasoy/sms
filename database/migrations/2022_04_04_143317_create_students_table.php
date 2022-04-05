<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("students", function (Blueprint $table) {
            $table->id();
            $table->string("student_lrn", 12);
            $table->unique("student_lrn");
            $table->string("first_name", 30);
            $table->string("middle_name", 30);
            $table->string("last_name", 30);
            $table->integer("age");
            $table->string("year_level", 15);
            $table->string("section", 30);
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
        Schema::dropIfExists("students");
    }
};
