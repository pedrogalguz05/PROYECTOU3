<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\cantante;

class CantanteSees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $cantantes = cantante::all();
        for ($i=0; $i < 60; $i++) { 
            $cantante = new cantante();
            $cantante->nombre = $faker->name;
            $cantante->apellidopaterno = $faker->lastName;
            $cantante->apellidomaterno = $faker->lastName;
            $cantante->edad = $faker->numberBetween(18,60);
            $cantante->save();


        }
        
        
    }
}
