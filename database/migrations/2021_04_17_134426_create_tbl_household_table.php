<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHouseholdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_household', function (Blueprint $table) {
            $table->id();
            $table->date('yearnow');
            $table->string('owner');
            $table->string('lot')->nullable();
            $table->string('street');
            $table->string('purok');
            $table->string('date_reg');
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
        Schema::dropIfExists('tbl_household');
    }
}
