<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $id_role = Uuid::uuid1();
        DB::table('roles')->insert([
            'id' => $id_role,
            'name' => 'Root'
        ]);

        $id_user = Uuid::uuid1();
        DB::table('users')->insert([
            'id' => $id_user,
            'username' => 'sieduca',
            'name' => 'Sieduca Usuario',
            'email' => 'sieduca@sieduca.com',
            'id_employee' => null,
            'password' => bcrypt('psieduca')
        ]);

        $id_user_role = Uuid::uuid1();
        DB::table('role_user')->insert([
            'id' => $id_user_role,
            'role_id' => $id_role,
            'user_id' => $id_user
        ]);

        /*Seeder Academicos*/
        $this->call(AcademicosSeeder::class);
        $this->call(Periodo_escolarSeeder::class);
        $this->call(PlantelSeed::class);
    }
}
