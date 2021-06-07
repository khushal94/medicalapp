<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressColumnToNursebooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nursebooking', function (Blueprint $table) {
            if (!Schema::hasColumn('nursebooking', 'address')){
                $table->text('address')->nullable()->after('visit_time');
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
        Schema::table('nursebooking', function (Blueprint $table) {
            //
        });
    }
}
