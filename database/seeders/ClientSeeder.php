<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            "id"=>1,
            "user_id"=>4
        ]);
        Client::create([
            "id"=>2,
            "user_id"=>5
        ]);
    }
}
