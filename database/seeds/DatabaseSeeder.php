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
        $UserAmin = new User();
        $UserAmin->rut = '19487219-5';
        $UserAmin->name = 'Hector';
        $UserAmin->apellido = 'Caceres';
        $UserAmin->apellido2 = ' ';
        $UserAmin->email = 'admin@admin.com';
        $UserAmin->password = Hash::make('admin123');
        $UserAmin->save();

        $User1 = new User();
        $User1->rut = '19487219-4';
        $User1->name = 'Cristopher';
        $User1->apellido = 'Hernandez';
        $User1->apellido2 = 'Loyola';
        $User1->email = 'chernandez@inacap.com';
        $User1->password = '66666';
        $User1->save();

        $User2 = new User();
        $User2->rut = '19854217-6';
        $User2->name = 'Door';
        $User2->apellido = 'Beltran';
        $User2->apellido2 = 'Garcia';
        $User2->email = 'abeltran@inacap.com';
        $User2->password = '12345';
        $User2->save();


        $User3 = new User();
        $User3->rut = '19854217-7';
        $User3->name = 'Sebastian';
        $User3->apellido = 'Castillo';
        $User3->apellido2 = 'Benitez';
        $User3->email = 'scastillo@inacap.com';
        $User3->password = '54321';
        $User3->save();

        $User4 = new User();
        $User4->rut = '14064118-9';
        $User4->name = 'Alan';
        $User4->apellido = 'Cartes';
        $User4->apellido2 = 'Fica';
        $User4->email = 'acartes@inacap.com';
        $User4->password = '140641189';
        $User4->save();

        $User5 = new User();
        $User5->rut = '17238085-9';
        $User5->name = 'Daniel';
        $User5->apellido = 'Cardenas';
        $User5->apellido2 = 'Luengo';
        $User5->email = 'dcardenas@inacap.com';
        $User5->password = '172380859';
        $User5->save();

        $User6 = new User();
        $User6->rut = '18789183-3';
        $User6->name = 'David';
        $User6->apellido = 'Mendez';
        $User6->apellido2 = 'Jeldres';
        $User6->email = 'dmendez@inacap.com';
        $User6->password = '187891833';
        $User6->save();


        $Sala1 = new Sala();
        $Sala1->NombreSala = 'Laboratorio 5';
        $Sala1->Estado = 0;
        $Sala1->save();

        $Sala2 = new Sala();
        $Sala2->NombreSala = 'Laboratorio Leica';
        $Sala2->Estado = 0;
        $Sala2->save();

        $Sala3 = new Sala();
        $Sala3->NombreSala = 'Bodega';
        $Sala3->Estado = 0;
        $Sala3->save();

        $Registro1 = new Registro();
        $Registro1->user_id = 2;
        $Registro1->sala_id = 1;
        $Registro1->save();

        $Registro2 = new Registro();
        $Registro2->user_id = 3;
        $Registro2->sala_id = 2;
        $Registro2->save();

        $Registro3 = new Registro();
        $Registro3->user_id = 4;
        $Registro3->sala_id = 2;
        $Registro3->save();

        $Registro4 = new Registro();
        $Registro4->user_id = 3;
        $Registro4->sala_id = 3;
        $Registro4->save();

    }
}
