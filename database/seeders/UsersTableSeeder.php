<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => hash::make('111'),
                'rol' => 'admin',
                'estatus' => 'activo'
            ],

             // Director Academico
             [
                'name' => 'DirectorAcademico',
                'username' => 'directorAcademico',
                'email' => 'directorAcademico@gmail.com',
                'password' => hash::make('111'),
                'rol' => 'director_academico',
                'estatus' => 'activo'
             ],

            
             // Usuario
             [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => hash::make('111'),
                'rol' => 'user',
                'estatus' => 'activo'
             ],

            ]);
} 
}