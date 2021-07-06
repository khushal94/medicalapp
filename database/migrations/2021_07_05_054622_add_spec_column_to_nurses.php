<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecColumnToNurses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nurses', function (Blueprint $table) {
            if (!Schema::hasColumn('nurses', 'availability')){
                $table->longText('availability')->nullable()->after('address');
            };
            if (!Schema::hasColumn('nurses', 'qualification')){
                $table->string('qualification')->nullable()->after('address');
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
        Schema::table('nurses', function (Blueprint $table) {
            //
        });
    }
}
