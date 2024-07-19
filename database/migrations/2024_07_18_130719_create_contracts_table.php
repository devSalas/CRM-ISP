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
            $table->boolean("is_company");
            $table->string("company")->nullable();
            $table->boolean("state");
            $table->unsignedBigInteger("worker_id");
            $table->unsignedBigInteger("client_id");
            $table->unsignedBigInteger("service_id");
            $table->unsignedBigInteger("box_nat_id");
            $table->unsignedBigInteger("router_id");
            $table->unsignedBigInteger("payment_commitment_id");
            $table->string("SN")->nullable();
            $table->string("port_box_nat")->nullable();
            $table->unsignedBigInteger("hire_date");
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
