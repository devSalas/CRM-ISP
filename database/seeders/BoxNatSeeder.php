<?php

namespace Database\Seeders;

use App\Models\BoxNat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoxNatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BoxNat::create([
            "id"=>1,
            "name"=>"SJM-N1",
            "description"=>"Esta en un lugar complicado.",
            "state"=>"buen estado"
        ]);
        BoxNat::create([
            "id"=>2,
            "name"=>"SJM-N2",
            "description"=>"Esta en un lugar accesible.",
            "state"=>"buen estado"
        ]);
        BoxNat::create([
            "id"=>3,
            "name"=>"SJM-N3",
            "description"=>"Esta en un lugar raro.",
            "state"=>"buen estado"
        ]);
    }
}
