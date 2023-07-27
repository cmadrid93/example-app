<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('emp_Id')->unsigned();
            $table->string('emp_nom');
            $table->string('emp_tel');
            $table->string('emp_rtn');
            $table->unsignedBigInteger('User_type');
            $table->foreign('User_type')->references('User_Id')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};

