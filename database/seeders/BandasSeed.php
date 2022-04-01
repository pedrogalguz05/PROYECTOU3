<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Banda;

class BandasSeed extends Seeder
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
        for ($i=0; $i < 10; $i++) { 
            $banda = new Banda();
            $banda->nombre = $faker->name;
            $banda ->descripcion = $faker->text;
            $banda->save();
        }

        
    }
}
