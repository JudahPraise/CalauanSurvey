<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblResidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_residence', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('unique_id')->unique();
            $table->date('yearnow');
            $table->mediumText('image');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('job_status');
            $table->string('block')->nullable();
            $table->string('lot')->nullable();
            $table->string('street');
            $table->string('barangay');
            $table->string('municipality');
            $table->string('province');
            $table->string('birthplace');
            $table->date('birthday');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('citizenship');
            $table->string('email')->unique();
            $table->string('religion');
            $table->string('height');
            $table->string('weight');
            $table->string('blood_type');
            $table->string('voters_id');
            $table->string('contact_no');
            $table->string('business_name')->nullable();
            $table->string('business_permit')->nullable();
            $table->string('purok_id');
            $table->string('hhold_id');
            $table->string('monthly_income');
            $table->string('sfname');
            $table->string('smname');
            $table->string('slname');
            $table->date('sbirthday');
            $table->string('occupation');
            $table->string('surveyor');
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
        Schema::dropIfExists('tbl_residence');
    }
}