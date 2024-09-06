<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=>"esteban salas sulca",
            "email"=>"esteban@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"927859435",
            "gender"=>"masculino",
            "age"=>"20",
            "DNI"=>"74702826",
            "CE"=>"no defino",
        ]);
/*         User::create([
            "name"=>"Sebastian",
            "email"=>"sebastian@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"8888888888",
            "gender"=>"masculino",
            "age"=>"21",
            "DNI"=>"000000000",
            "CE"=>"",
           
        ]);
        User::create([
            "name"=>"Jorge Boluarte",
            "email"=>"jorge@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"927859435",
            "gender"=>"masculino",
            "age"=>"20",
            "DNI"=>"74702826",
            "CE"=>"22222222",
           
        ]);
        User::create([
            "name"=>"alejandro salas",
            "email"=>"alejandro@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"927859435",
            "gender"=>"masculino",
            "age"=>"20",
            "DNI"=>"74702826",
            "CE"=>"22222222",
            
        ]);
        User::create([
            "name"=>"martin salas",
            "email"=>"martin@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"927859435",
            "gender"=>"masculino",
            "age"=>"20",
            "DNI"=>"74702826",
            "CE"=>"22222222",
            
        ]); */
    }
}
