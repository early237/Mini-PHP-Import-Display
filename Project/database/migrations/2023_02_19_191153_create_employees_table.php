<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('firstName', 20)->nullable();
            $table->string('lastName', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('profession', 100)->nullable();
            $table->string('chapterName', 50)->nullable();
            $table->string('companyName', 70)->nullable();
            $table->string('website', 50)->nullable();
            $table->string('address', 70)->nullable();
            $table->string('postcode', 30)->nullable();
            $table->string('phoneNumber', 30)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('joinDate', 20)->nullable();
            $table->string('renewalDate', 20)->nullable();
            $table->string('sponsor', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
