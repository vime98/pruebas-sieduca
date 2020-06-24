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
    }
}
