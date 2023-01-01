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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('petName');
            $table->string('pawrent');
            $table->string('status');
            $table->string('breed');
            $table->enum('gender',['male','female']);
            $table->string('DateOfBirth');
            $table->string('phone');
            $table->text('address');
            $table->string('city');
            $table->string('township');
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
        Schema::dropIfExists('patients');
    }
};
