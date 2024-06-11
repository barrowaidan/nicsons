<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->string('name', 125);
            $table->string('phone_no', 125);
            $table->string('alt_phone_no', 125)->nullable();
            $table->string('email', 125);
            $table->string('post_address', 125)->nullable();
            $table->string('physical_address', 125)->nullable();
            $table->string('logo', 125);
            $table->longText('map_location')->nullable();
            $table->longText('about_company')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('core_value')->nullable();
            $table->longText('connection')->nullable();
            $table->longText('commitment')->nullable();
            $table->longText('creativity')->nullable();
            $table->string('slide1', 125)->nullable();
            $table->string('slide2', 125)->nullable();
            $table->string('slide3', 125)->nullable();
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
        Schema::dropIfExists('company_details');
    }
}
