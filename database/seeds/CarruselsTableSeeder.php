<?php

use Illuminate\Database\Seeder;
use App\Carrusel;

class CarruselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Carrusel::class, 5)->create(); 
    }
}
