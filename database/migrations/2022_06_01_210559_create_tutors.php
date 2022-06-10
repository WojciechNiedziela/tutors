<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("lastName")->nullable();
            $table->string("email")->nullable();
            $table->string("phoneNumber")->nullable();
            $table->string("subject")->nullable();
            $table->integer("grade")->nullable();
            $table->text("education")->nullable();
            $table->text("experience")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
};
