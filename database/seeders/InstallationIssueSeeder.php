<?php

namespace Database\Seeders;

use App\Models\InstallationIssue;
use Illuminate\Database\Seeder;

class InstallationIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstallationIssue::create([
            "id"=>1,
            "worker_id"=>1,
            "code"=>"2023",
            "description"=>"esto es una prueba"
        ]);
    }
}
