<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('birthday');
            $table->string('gender');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('description')->nullable();
            $table->json('patient')->nullable();
            $table->string('rating')->nullable();
            $table->string('speciality');
            $table->string('experience');
            $table->string('image');
            $table->mediumText('address')->nullable();
            $table->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('doctors');
    }
}
