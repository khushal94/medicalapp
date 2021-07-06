<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumnToDoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            if (!Schema::hasColumn('doctors', 'availability')){
                $table->longText('availability')->nullable()->after('experience');
            };
            if (!Schema::hasColumn('doctors', 'registration')){
                $table->string('registration')->nullable()->after('experience');
            };
            if (!Schema::hasColumn('doctors', 'qualification')){
                $table->string('qualification')->nullable()->after('experience');
            };
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
        });
    }
}
