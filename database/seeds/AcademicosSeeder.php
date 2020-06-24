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
            ['id' => Uuid::uuid1(), 'nombre' => 'PRACTICAS', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'TEORICAS', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'TEORICAS - PRACTICAS', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')]
        ]);

        DB::table('movimiento_alumno')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'ERROR DE REGISTRO', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'ACTIVO', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'INSCRIPCION', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'MATRICULADO', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'VERANO', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'BAJA TEMPORAL', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'BAJA DEFINITIVA', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'GRADUADO', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')],
            ['id' => Uuid::uuid1(), 'nombre' => 'TITULADO', 'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP')]
        ]);
    }
}
