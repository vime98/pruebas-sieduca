<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class PlantelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ID_PAIS = Uuid::uuid1();
        DB::table('pais')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'ESTADOS UNIDOS', 'estado' => '1'],
            ['id' => $ID_PAIS, 'nombre' => 'MEXICO', 'estado' => '1']
        ]);

        $iD_MICHOACAN = Uuid::uuid1();
        $iD_COLIMA = Uuid::uuid1();
        $iD_GUANAJUATO = Uuid::uuid1();
        DB::table('estado')->insert([
            ['id' => $iD_COLIMA, 'nombre' => 'COLIMA','id_pais' => $ID_PAIS, 'estado' => '1'],
            ['id' => $iD_GUANAJUATO, 'nombre' => 'GUANAJUATO','id_pais' => $ID_PAIS, 'estado' => '1'],
            ['id' => $iD_MICHOACAN, 'nombre' => 'MICHOACAN','id_pais' => $ID_PAIS, 'estado' => '1']
        ]);

        DB::table('municipio')->insert([
            ['id' => Uuid::uuid1(), 'nombre' => 'ACAMBARO','id_estado' => $iD_GUANAJUATO, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'COLIMA','id_estado' => $iD_COLIMA, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'AGUAHE','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'ANTUNEZ','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'APATZINGAN','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'BUENAVISTA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'CARACUARO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'CIUDAD HIDALGO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'COALCOMAN','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'HUETAMO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'BUENAVISTA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'CARACUARO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'CIUDAD HIDALGO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'COALCOMAN','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'HUETAMO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'HUIPANA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'PURUANDIRO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'JUQUILPAN','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'LAS YEGUAS','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'LAZARO CARDENAS','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'MARAVATIO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'MORELIA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'NUEVA ITALIA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'HUETAMO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'HUIPANA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'PURUANDIRO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'PARACHO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'CHERAN','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'PINZANDARO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'PATZCUARO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'RINCON DE BARANQUILLA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'SAGUAYO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'TACAMBARO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'TEPALCATEPEC','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'BUENAVISTA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'URUAPAN','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'USPERO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'ZAMORA','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'ZINAPECUARO','id_estado' => $iD_MICHOACAN, 'estado' => '1'],
            ['id' => Uuid::uuid1(), 'nombre' => 'ZITACUARO','id_estado' => $iD_MICHOACAN, 'estado' => '1']
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
