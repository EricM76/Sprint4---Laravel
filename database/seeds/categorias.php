<?php

use Faker\Guesser\Name;
use Illuminate\Database\Seeder;

class categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "autos"
        ]);
        DB::table('categories')->insert([
            'name' => "inmuebles"
        ]);
        DB::table('categories')->insert([
            'name' => "muebles"
        ]);
        DB::table('categories')->insert([
            'name' => "herramientas"
        ]);
        DB::table('categories')->insert([
            'name' => "electrodomesticos"
        ]);
        DB::table('categories')->insert([
            'name' => "gamers"
        ]);
        DB::table('categories')->insert([
            'name' => "juguetes"
        ]);
        DB::table('categories')->insert([
            'name' => "libros"
        ]);
    }
}
