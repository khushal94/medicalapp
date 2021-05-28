<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('birthday');
            $table->string('phone')->nullable();
            $table->string('gender');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('description')->nullable();
            $table->json('patient')->nullable();
            $table->string('rating')->nullable();
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
        Schema::dropIfExists('nurses');
    }
}
