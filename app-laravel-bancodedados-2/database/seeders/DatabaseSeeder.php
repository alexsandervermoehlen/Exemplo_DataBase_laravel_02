<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PessoaTableSeeder::class);
        $this->call(ProdutoTableSeeder::class);
    }
}


class PessoaTableSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Sabrina', 'Sabrina@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Andre', 'andre@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Ivo', 'ivo@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Claudia', 'claudia@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Marcos', 'marcos@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Bruno', 'bruno@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Andreia', 'andreia@gmail.com'));
    }
}

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Cadeira', 'Cadeira com estofado e pernas de madeira escura'));
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Mesa', 'Mesa para 6 cadeiras com tampo de granito'));
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Painel', 'Painel para TV de ate 50 polegadas com duas portas e prateleiras'));
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Cama', 'Cama box 158cm x 196cm'));
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Sofá', 'Conjunto de duas peças com 2 e 3 lugares'));
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Microondas', 'Microondas 32l'));
        DB::insert('insert into produto (nome, descricao) values (?,?)', array('Panela', 'Conjunto de panelas com 6 Pcs'));
    }
}