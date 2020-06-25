<?php

use Illuminate\Database\Seeder;

class FinancierosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_beca')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'CONDONACIÓN INSCRIPCIÓN'],
            ['id' => Uuid::uuid1(), 'nombre' => 'INSTITUCIONAL'],
            ['id' => Uuid::uuid1(), 'nombre' => 'DEPORTES'],
            ['id' => Uuid::uuid1(), 'nombre' => 'STASPE']
        ]);
    }
}
