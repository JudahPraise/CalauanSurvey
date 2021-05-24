<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFamilyInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_family_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('family_id')->unique();
            $table->string('identification');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('house_num');
            $table->string('street');
            $table->string('purok');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('hh_fname');
            $table->string('hh_mname');
            $table->string('hh_lname');
            $table->string('hh_qualifier')->nullable();
            $table->string('hh_condition');
            $table->string('main_fam_id');
            $table->string('f_status');
            $table->integer('fmem_num');
            $table->string('year_resided');
            $table->string('hh_origin');
            $table->string('tel_provider');
            $table->string('contact_num');
            $table->string('internet_provider');
            $table->json('vehicles');
            $table->json('quantities');
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
        Schema::dropIfExists('tbl_family_information');
    }
}
