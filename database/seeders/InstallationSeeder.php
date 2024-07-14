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
        /*  $table->id();
            $table->string("name");
            $table->string("phone");
            $table->string("email")->unique();
            $table->unsignedBigInteger("service");
            $table->unsignedInteger("worker");
            $table->date("installer_date");
            $table->time("hour");
            $table->string("observation");
            $table->string("code")->unique();
            $table->timestamps(); */

         Installation::create([
            'name'=>"enrique roman de la cruz",
            "phone" =>"927859435",
            "email" => "enrique@gmail.com",
            "service"=>1,
            "worker"=>1,
            "installer_date"=>'2024-07-13',
            "hour"=>'11:51:00',
            "observation" => 'No hay observación',
            "code"=>"1920"
         ]);
         Installation::create([
            'name'=>"pablo perez",
            "phone" =>"927859435",
            "email" => "pablo@gmail.com",
            "service"=>2,
            "worker"=>2,
            "installer_date"=>'2024-07-13',
            "hour"=>'11:51:00',
            "observation" => 'No hay observación',
            "code"=>"1921"
         ]);
    }
}
