<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'Nombre'=> 'Mac',
            'Nombre'=> 'Skate futurista',
            'Nombre'=> 'Carro',
            'Nombre'=> 'Pc Gamer',
            'Nombre'=> 'Cellphone',
            'Nombre'=> 'Iphone',
            'Nombre'=> 'Huawei',
            'Nombre'=> 'MinePoke',
        ]);
        $productos=factory(App\Productos::class,5)->create();
    }
}
