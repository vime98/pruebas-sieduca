<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class Periodo_escolarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodo_escolar')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'Semestral'],
            ['id' => Uuid::uuid1(), 'nombre' => 'Cuatrimestral'],
            ['id' => Uuid::uuid1(), 'nombre' => 'Modular']
        ]);
    }
}
