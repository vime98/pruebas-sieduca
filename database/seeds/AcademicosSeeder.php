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

        DB::table('movimiento_alumno')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'ERROR DE REGISTRO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'ACTIVO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'INSCRIPCION'],
            ['id' => Uuid::uuid1(), 'nombre' => 'MATRICULADO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'VERANO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'BAJA TEMPORAL'],
            ['id' => Uuid::uuid1(), 'nombre' => 'BAJA DEFINITIVA'],
            ['id' => Uuid::uuid1(), 'nombre' => 'GRADUADO'],
            ['id' => Uuid::uuid1(), 'nombre' => 'TITULADO']
        ]);
    }
}
