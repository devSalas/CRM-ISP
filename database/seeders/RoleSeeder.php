<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Role::create([
            'id'=>1,
            'name'=>'admin'
        ]);

        Role::create([
            'id'=>2,
            'name'=>'client'
        ]);

        Role::create([
            'id'=>3,
            'name'=>'worker'
        ]);

        DB::table("model_has_roles")->insert([
            'role_id'=>1,
            'model_type'=>'App\Models\User',
            'model_id'=>1
        ]);

        DB::table("model_has_roles")->insert([
            'role_id'=>2,
            'model_type'=>'App\Models\User',
            'model_id'=>2
        ]);

        DB::table("model_has_roles")->insert([
            'role_id'=>3,
            'model_type'=>'App\Models\User',
            'model_id'=>3
        ]);

    }
}
