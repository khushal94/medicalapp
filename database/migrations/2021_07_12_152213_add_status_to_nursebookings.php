<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToNursebookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nursebooking', function (Blueprint $table) {
            if (!Schema::hasColumn('nursebooking', 'status')){
                $table->boolean('status')->default(0)->after('address');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nursebooking', function (Blueprint $table) {
            //
        });
    }
}
