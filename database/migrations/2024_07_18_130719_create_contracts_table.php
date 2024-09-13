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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->boolean("is_company")->nullable();
            $table->string("company")->nullable();
            $table->boolean("state")->nullable();
            $table->unsignedBigInteger("worker_id")->nullable();
            $table->unsignedBigInteger("client_id")->nullable();
            $table->unsignedBigInteger("service_id")->nullable();
            $table->unsignedBigInteger("box_nat_id")->nullable();
            $table->unsignedBigInteger("router_id")->nullable();
            $table->unsignedBigInteger("payme nt_commitment_id")->nullable();
            $table->string("SN")->nullable();
            $table->string("port_box_nat")->nullable();
            $table->string('address')->nullable();
            $table->string('zone')->nullable();
            $table->string('district')->nullable();
            $table->unsignedBigInteger("hire_date")->nullable();
            $table->unsignedBigInteger("finish_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
