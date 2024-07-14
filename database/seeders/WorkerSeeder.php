<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Worker::create([
            "id" => 1,
            "user_id" => 2
        ]);
        Worker::create([
            "id" => 2,
            "user_id"=>3
        ]);
    }
}
