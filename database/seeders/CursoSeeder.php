<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $curso  = new Curso();
        // $curso->name = 'vue';
        // $curso->descripcion = "el mejor y peor framework de js";
        // $curso->categoria = "js";

        // $curso->save();

        // $curso2 = new Curso();
        // $curso2->name = 'js';
        // $curso2->descripcion = 'el mejor language';
        // $curso2->categoria="desarollo web";

        // $curso2->save();

        // $curso3 = new Curso();
        // $curso3->name = 'js';
        // $curso3->descripcion = 'el mejor language';
        // $curso3->categoria="desarollo web";

        // $curso3->save();

        Curso::factory(50)->create();
    }
}
