<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\cantante;
use App\Models\Banda;
use Illuminate\Support\Facades\DB;

class IntegranteBandaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $bandas = Banda::all();
        $cantantes = Cantante::all();
        for($i=0; $i<60; $i++){ 
            DB::table("integrantes_bandas")->insert([
                "bandas_id" => $bandas->random()->id,
                "cantantes_id" => $cantantes->random()->id,
            ]);
        }




    }
}
