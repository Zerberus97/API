<?php

use App\Registro;
use App\Sala;
use App\User;
use Illuminate\Database\Seeder;


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
        $User1 = new User();
        $User1->rut = '19487219-4';
        $User1->name = 'Luchito';
        $User1->apellido = 'Makinola';
        $User1->apellido2 = 'Curaguilla';
        $User1->password = '12345';
        $User1->save();

        $Sala1 = new Sala();
        $Sala1->NombreSala = 'Laboratorio 5';
        $Sala1->Estado = 0;
        $Sala1->save();

        $Registro1 = new Registro();
        $Registro1->user_id = 1;
        $Registro1->sala_id = 1;
        $Registro1->save();
    }
}
