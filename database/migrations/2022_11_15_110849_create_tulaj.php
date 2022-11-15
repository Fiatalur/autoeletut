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
        Schema::create('tulaj', function (Blueprint $table) {
            $table->id("t_id");
            $table->string('tulajdonos_neve', 30);
            $table->date('tulajkezd', 20);
            $table->date('tulajvege', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tulaj');
    }
};
