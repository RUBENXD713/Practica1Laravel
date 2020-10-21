<?php

use Illuminate\Database\Seeder;

class ComentariossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'Contenido' => "Que increible!!",
            'productos' => 1
        ]);
        DB::table('comentarios')->insert([
            'Contenido' => "What!!",
            'productos' => 5
        ]);
        DB::table('comentarios')->insert([
            'Contenido' => "Calidad Precio!!",
            'productos' => 7
        ]);
        DB::table('comentarios')->insert([
            'Contenido' => "Te puedo dar mi opinion!!",
            'productos' => 3
        ]);
        DB::table('comentarios')->insert([
            'Contenido' => "No manches queeee!!",
            'productos' => 2
        ]);
        DB::table('comentarios')->insert([
            'Contenido' => "Lo mejor que eh visto!!",
            'productos' => 6
        ]);
        DB::table('comentarios')->insert([
            'Contenido' => "Esto es lo peor que puedes comprar!!",
            'productos' => 4
        ]);        
        $comentarios=Factory(App\Comentarioss::class,15)->create();
    }
}
