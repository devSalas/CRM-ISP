<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Service::create([
        "id"=>1,
        "name"=>"internet",
        "description"=>"description",
        "price"=>50.00,
        "tvs"=>"2",
        "speed"=>"50Mbps"
       ]);
       Service::create([
        "id"=>2,
        "name"=>"cable",
        "description"=>"description",
        "price"=>30.00,
        "tvs"=>"1",
        "speed"=>""
       ]);
       Service::create([
        "id"=>3,
        "name"=>"internet + cable",
        "description"=>"description",
        "price"=>80.00,
        "tvs"=>"2",
        "speed"=>"50Mbps"
       ]);
    }
}
