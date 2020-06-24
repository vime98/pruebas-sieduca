<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class AcademicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividad')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'PRACTICAS'],
            ['id' => Uuid::uuid1(), 'nombre' => 'TEORICAS'],
            ['id' => Uuid::uuid1(), 'nombre' => 'TEORICAS - PRACTICAS']
        ]);

        DB::table('nivel')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'LICENCIATURA'],
            ['id' => Uuid::uuid1(), 'nombre' => 'MAESTRIA'],
            ['id' => Uuid::uuid1(), 'nombre' => 'DOCTORADO']
        ]);
        DB::table('horario')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'MATUTINO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'VESPERTINO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'SABATINO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'ESPECIAL']
        ]);
        DB::table('modalidad')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'ESCOLARIZADA'],
            ['id' => Uuid::uuid1(), 'nombre' => 'SEMI-ESCOLARIZADA'],
            ['id' => Uuid::uuid1(), 'nombre' => 'MIXTA'],
            ['id' => Uuid::uuid1(), 'nombre' => 'VIRTUAL']
        ]);
    }
}
