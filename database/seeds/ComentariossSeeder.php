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
        $comentarios=Factory(App\Comentarioss::class,15)->create();
    }
}
