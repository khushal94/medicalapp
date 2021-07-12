<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToAmbulancebookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ambulance_bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('ambulance_bookings', 'status')){
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
        Schema::table('ambulance_bookings', function (Blueprint $table) {
            //
        });
    }
}
