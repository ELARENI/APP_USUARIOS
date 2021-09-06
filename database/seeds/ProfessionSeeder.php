<?php

use Illuminate\Database\Seeder;
//coloco
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


     DB::Statement('SET FOREIGN_KEY_CHECKS = 0');
     DB::Table('Profession')->truncate();
     DB::Statement('SET FOREIGN_KEY_CHECKS = 1');



        //DB::insert('INSERT INTO  Profession(title) VALUES ("Desarrollador Back-end")');


       DB::table('Profession')->insert([
           'title'=> 'Desarrollador Back-end',
       ]);

       DB::table('Profession')->insert([
        'title'=> 'Desarrollador Front-end',
    ]);


    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full Developer',
    ]);


    DB::table('Profession')->insert([
        'title'=> 'Desarrollador java script',
    ]);


    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full stack',
    ]);


    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full python',
    ]);

    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full Java',
    ]);

    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full factory',
    ]);

    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full Readme',
    ]);

    DB::table('Profession')->insert([
        'title'=> 'Desarrollador Full Ramdom',
    ]);

    }
}
