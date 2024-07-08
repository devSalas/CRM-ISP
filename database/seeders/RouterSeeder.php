<?php

namespace Database\Seeders;

use App\Models\Router;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Router::create([
            "id" =>1,
            "name"=>"dixon",
            "description"=> "doble banda",
            "model"=>"x3GER",
            "ports"=> "5"
        ]);
        Router::create([
            "id" =>2,
            "name"=>"Huawei",
            "description"=> "200mbps de velocidads",
            "model"=>"534df",
            "ports"=> "5"
        ]);
        Router::create([
            "id" =>3,
            "name"=>"Tp-Link",
            "description"=> "10mts de alcance inalambrica",
            "model"=>"345dd",
            "ports"=> "5"
        ]);
    }
}
