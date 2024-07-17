<?php

namespace Database\Seeders;

use App\Models\PaymentCommitment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentCommitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentCommitment::create([
            "id"=>1,
            "start_date"=>1,
            "end_date" =>10
        ]);
        PaymentCommitment::create([
            "id"=>1,
            "start_date"=>11,
            "end_date" =>20
        ]);
        PaymentCommitment::create([
            "id"=>1,
            "start_date"=>21,
            "end_date" =>30
        ]);
    }
}
