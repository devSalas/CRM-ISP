<?php

namespace Database\Seeders;

use App\Models\Contract;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::create([
            "id"=>1,
            "code"=>"2023",
            "is_company" =>false,
            "company" =>"",
            "state" => true,
            "worker_id" =>1,
            "client_id" => 1,
            "box_nat_id" =>1,
            "router_id"=>1,
            "service_id"=>1,
            "payment_commitment_id"=>1,
            "SN"=>"23423423",
            "port_box_nat" =>"2",
            "hire_date"=>"2024-07-17",
            "finish_date"=>""
        ]);
        Contract::create([
            "id"=>2,
            "code"=>"2024",
            "is_company" =>true,
            "company" =>"",
            "state" => true,
            "worker_id" =>2,
            "client_id" => 2,
            "box_nat_id" =>1,
            "router_id"=>1,
            "service_id"=>2,
            "payment_commitment_id"=>1,
            "SN"=>"23423423",
            "port_box_nat" =>"2",
            "hire_date"=>"2024-07-17",
            "finish_date"=>""
        ]);
    }
}
