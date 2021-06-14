<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumnToDrugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drugs', function (Blueprint $table) {
            $table->string('type_sell')->nullable()->after('rate');
            $table->string('manufacturer')->nullable()->after('rate');
            $table->string('country_origin')->nullable()->after('rate');
            $table->string('salt')->nullable()->after('rate');
            $table->string('uses')->nullable()->after('rate');
            $table->string('alternate')->nullable()->after('rate');
            $table->string('side_effect')->nullable()->after('rate');
            $table->string('direction_use')->nullable()->after('rate');
            $table->string('therapeutic')->nullable()->after('rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drugs', function (Blueprint $table) {
            //
        });
    }
}
