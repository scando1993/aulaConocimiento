<?php

use Illuminate\Database\Seeder;
use App\Ev3;
class Ev3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statement = "ALTER TABLE introev3 AUTO_INCREMENT = 1;";
        DB::unprepared($statement);

        DB::table('introev3')->delete();

        Ev3::create(array(
        'id_menu'=>9,
        'ruta'=>'BloqueMotormediano.pdf',
        ));

        Ev3::create(array(
            'id_menu'=>10,
            'ruta'=>'BloqueMotorgrande.pdf',
        ));

        Ev3::create(array(
        'id_menu'=>11,
        'ruta'=>'BloqueMoverladireccion.pdf',
        ));
        
        Ev3::create(array(
        'id_menu'=>12,
        'ruta'=>'BloqueMovertanque.pdf',
        ));


        Ev3::create(array(
        'id_menu'=>13,
        'ruta'=>'BloquePantalla.pdf',
        ));

        Ev3::create(array(
        'id_menu'=>14,
        'ruta'=>'BloqueSonido.pdf',
        ));


        Ev3::create(array(
            'id_menu'=>15,
            'ruta'=>'BloqueLuzdeestado.pdf',
        ));


        Ev3::create(array(
            'id_menu'=>40,
            'ruta'=>'Bloque Acceso al archivo.pdf',
        ));

    }
}
