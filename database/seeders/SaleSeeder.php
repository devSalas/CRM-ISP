<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale::create([
            'id'=>1,
            'name'=>'juan lucas perez',
            'phone'=>'444444444',
            'DNI' =>'74232932',
            'CE' =>'00345343',
            'address' =>'San Gabriel alto',
            'observation' =>'Promoción mes fiestas patrias',
            'description' =>'Es accesible',
            'service_id' =>1,
            'user_id' =>1,
        ]);
    }
}
