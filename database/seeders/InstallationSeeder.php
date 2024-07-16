<?php

namespace Database\Seeders;

use App\Models\Installation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         Installation::create([
            'name'=>"enrique roman de la cruz",
            "phone" =>"927859435",
            "email" => "enrique@gmail.com",
            "address"=>"San Juan de Miraflores",
            "service_id"=>1,
            "worker_id"=>1,
            "installation_date"=>'2024-07-13',
            "hour"=>'11:51:00',
            "observation" => 'No hay observación',
            "code"=>"1920"
         ]);
         Installation::create([
            'name'=>"pablo perez",
            "phone" =>"927859435",
            "email" => "pablo@gmail.com",
            "address"=>"villa maria del triunfo",
            "service_id"=>2,
            "worker_id"=>2,
            "installation_date"=>'2024-07-13',
            "hour"=>'11:51:00',
            "observation" => 'No hay observación',
            "code"=>"1921"
         ]);
    }
}
