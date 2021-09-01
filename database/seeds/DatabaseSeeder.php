<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use curso\User;
use curso\Curso;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Isabela Ornellas',
            'email' => 'admin@isabellaornellas.com.br',
            'password' => Hash::make('cursoisabella'),
            'telefone' => '99999999',
            'profissao' => '---------',
            'endereco' => '---------',
            'bairro' => '---------',
            'cidade' => '---------',
            'tipo' => 'admin',
        ]);

        DB::table('cursos')->insert([
            'nome' => 'Curso de Oratória',
            'data' => date('Y-m-d'),
            'link_pagamento' => 'https://mpago.la/18nwqVx',
        ]);
    }
}
