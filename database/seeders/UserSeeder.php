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
            "name"=>"lucas salas",
            "email"=>"lucas@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"927859435",
            "gender"=>"masculino",
            "age"=>"20",
            "DNI"=>"74702826",
            "CE"=>"22222222",

        ]);
        User::create([
            "name"=>"pedro salas",
            "email"=>"pedro@gmail.com",
            "password"=>Hash::make("12345678"),
            "phone"=>"927859435",
            "gender"=>"masculino",
            "age"=>"20",
            "DNI"=>"74702826",
            "CE"=>"22222222",
           
        ]);
        User::create([
            "name"=>"ronal salas",
            "email"=>"ronal@gmail.com",
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
            
        ]);
    }
}
