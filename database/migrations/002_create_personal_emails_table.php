<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_emails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('people');
            $table->string('email', 100)->unique();
            $table->enum('type', ['personal', 'business']);
            $table->timestamps();
        });

        Schema::table('people', function (Blueprint $table) {
            $table->foreign('personal_email_id')->references('id')->on('personal_emails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_emails');
    }
};
