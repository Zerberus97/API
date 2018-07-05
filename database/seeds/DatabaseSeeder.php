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
        $User1->name = 'Cristopher';
        $User1->apellido = 'Hernandez';
        $User1->apellido2 = 'Loyola';
        $User1->password = '66666';
        $User1->save();

        $User2 = new User();
        $User2->rut = '19854217-6';
        $User2->name = 'Alan';
        $User2->apellido = 'Beltran';
        $User2->apellido2 = 'Garcia';
        $User2->password = '12345';
        $User2->save();


        $User3 = new User();
        $User3->rut = '19854217-7';
        $User3->name = 'Sebastian';
        $User3->apellido = 'Castillo';
        $User3->apellido2 = 'Benitez';
        $User3->password = '54321';
        $User3->save();


        $Sala1 = new Sala();
        $Sala1->NombreSala = 'Laboratorio 6';
        $Sala1->Estado = 0;
        $Sala1->save();

        $Sala2 = new Sala();
        $Sala2->NombreSala = 'Laboratorio Leica';
        $Sala2->Estado = 0;
        $Sala2->save();

        $Registro1 = new Registro();
        $Registro1->user_id = 1;
        $Registro1->sala_id = 1;
        $Registro1->save();

        $Registro2 = new Registro();
        $Registro2->user_id = 1;
        $Registro2->sala_id = 2;
        $Registro2->save();

        $Registro3 = new Registro();
        $Registro3->user_id = 2;
        $Registro3->sala_id = 2;
        $Registro3->save();

    }
}
