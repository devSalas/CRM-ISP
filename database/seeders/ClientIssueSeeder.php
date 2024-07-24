<?php

namespace Database\Seeders;

use App\Models\ClientIssues;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientIssues::create([
            "id"=>1,
            "code"=>2323,
            "description"=>"cable roto",
            "worker_id"=>1
        ]);
        
        ClientIssues::create([
            "id"=>2,
            "code"=>2324,
            "description"=>"luz roja",
            "worker_id"=>2
        ]);
    }
}
