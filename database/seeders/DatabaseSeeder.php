<?php

namespace Database\Seeders;

use App\Models\BoxNat;
use App\Models\ClientIssues;
use App\Models\User;
use App\Models\Worker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        $this->call([
/*             RoleSeeder::class,
            UserSeeder::class,
            WorkerSeeder::class,
            ClientSeeder::class, 
            BoxNatSeeder::class,
            RouterSeeder::class,
            ServiceSeeder::class,
            InstallationSeeder::class,
            PaymentCommitmentSeeder::class,
            ContractSeeder::class,
            InstallationIssueSeeder::class, */
            SaleSeeder::class
            
        ]);


    }
}
