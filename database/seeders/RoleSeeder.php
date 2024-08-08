<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $admin = Role::create([
            'id'=>1,
            'name'=>'admin'
        ]);

        $worker = Role::create([
            'id'=>2,
            'name'=>'worker'
        ]);

        $client = Role::create([
            'id'=>3,
            'name'=>'client'
        ]);

        /* roles secundarios */

        $installer = Role::create([
            'id'=>4,
            'name'=>'installer'
        ]);

        $seller = Role::create([
            'id'=>5,
            'name'=>'seller'
        ]);
        
        $marketing = Role::create([
            'id'=>6,
            'name'=>'marketing'
        ]);

        /* permisos de los roles por defecto */


        $viewVentas = Permission::create(['name'=>'view installation']);
        $viewVentas = Permission::create(['name'=>'edit installation']);
        $viewVentas = Permission::create(['name'=>'create installation']);
        
        



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
