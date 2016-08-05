<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Comando - Ejecutar composer dump-autoload
use Illuminate\Database\Seeder;

/**
 * Description of UserTableSeeder
 *
 * @author dbarona
 */
class AdminTableSeeder extends Seeder{
    
    // Comando - Ejecutar php artisan db:seed
    public function run(){

            \DB::table('usuarios')->insertGetId(array(
                'id'=>'1',
                'nombre' =>  "DEMO",
                'apellido' =>  "SENA",
                'email' => "demo@sena.com",
                'password' =>  \Hash::make('123456'),
            ));      
        }
    } // run
    

