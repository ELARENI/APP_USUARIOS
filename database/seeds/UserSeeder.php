<?php

use Illuminate\Database\Seeder;
//coloco
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


     DB::Statement('SET FOREIGN_KEY_CHECKS = 0');
     DB::Table('Users')->truncate();
     DB::Statement('SET FOREIGN_KEY_CHECKS = 1');


        
        
        DB::Table('Users')->insert(
            [

                'name' => 'Elsi Arenivar',
                'email'=>'elsyquesada@gmail.com',
                'password'=> bcrypt('Elsy123'),
                'Profession_id' => 10
            ]
            );



            DB::Table('Users')->insert(
                [
    
                    'name' => 'Santiago chago',
                    'email'=>'ch@gmail.com',
                    'password'=> bcrypt('222'),
                    'Profession_id' => 1
                ]
                );


                DB::Table('Users')->insert(
                    [
        
                        'name' => 'Ismael Zabla',
                        'email'=>'t@gmail.com',
                        'password'=> bcrypt('333'),
                        'Profession_id' => 2
                    ]
                    );


                    DB::Table('Users')->insert(
                        [
            
                            'name' => 'Sophia Andrea',
                            'email'=>'sophia@gmail.com',
                            'password'=> bcrypt('000'),
                            'Profession_id' => 1
                        ]
                        );


                        DB::Table('Users')->insert(
                            [
                
                                'name' => 'Gabriela Arenivar',
                                'email'=>'gaby@gmail.com',
                                'password'=> bcrypt('12345'),
                                'Profession_id' => 2
                            ]
                            );


                           DB::Table('Users')->insert(
                                [
                    
                                    'name' => 'Luis Miguel',
                                    'email'=>'lm@gmail.com',
                                    'password'=> bcrypt('89'),
                                    'Profession_id' => 6
                                ]
                                );


                                DB::Table('Users')->insert(
                                    [
                        
                                        'name' => 'Karla Martinez',
                                        'email'=>'kl@gmail.com',
                                        'password'=> bcrypt('888'),
                                        'Profession_id' => 7
                                    ]
                                    );

                                    DB::Table('Users')->insert(
                                        [
                            
                                            'name' => 'Juan carlos',
                                            'email'=>'jd@gmail.com',
                                            'password'=> bcrypt('7777'),
                                            'Profession_id' => 8
                                        ]
                                        );

                                        DB::Table('Users')->insert(
                                            [
                                
                                                'name' => 'Jose Enrique',
                                                'email'=>'enri@gmail.com',
                                                'password'=> bcrypt('111'),
                                                'Profession_id' => 10
                                            ]
                                            );


                                            DB::Table('Users')->insert(
                                                [
                                    
                                                    'name' => 'Isa Montano',
                                                    'email'=>'isa@gmail.com',
                                                    'password'=> bcrypt('666'),
                                                    'Profession_id' => 9
                                                ]
                                                );
    }
}
