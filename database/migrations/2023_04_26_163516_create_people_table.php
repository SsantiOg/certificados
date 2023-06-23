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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_documents')->constrained('documents');
            $table->string('doc');
            $table->date('date');
            $table->foreignId('id_contracts')->constrained('contracts');
            $table->string('salary');
            $table->date('date_i');
            $table->date('date_f')->nullable();
            $table->string('onus');
            $table->string('area');
            $table->string('pay_per_hour');
            $table->foreignId('id_users')->constrained('users');
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
        Schema::dropIfExists('people');
    }
};
