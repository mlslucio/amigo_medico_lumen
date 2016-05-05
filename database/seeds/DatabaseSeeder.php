<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
         /*DB::table('agendas')->insert([
			'data_emissao'=> str_random(10),
			'dia_semana'=> str_random(10),
			'saldo'=> str_random(10),
			'quantidade'=> str_random(10),
			'saldo_empenhado'=> str_random(10),
			'clinica_id'=> str_random(10),
        ]); */

        DB::table('agendas')->insert([
            'data_emissao'=> str_random(10),
            'dia_semana'=> str_random(10),
            'saldo'=> str_random(10),
            'quantidade'=> str_random(10),
            'saldo_empenhado'=> str_random(10),
            'clinica_id'=> str_random(10),
        ]);

          DB::table('user')->insert([
			'email'=> 'mauro@mauro',
			'password_hash'=> app('hash')->make(123),
			'tipo'=> 'M',
        ]);

        /*DB::table('consultas')->insert([
            'medico_id'=>1,
            'instituicao'=> 'apae',
            'paciente'=> 'teste',
            'status'=> 'PE',
            'descricao'=> 'atendimento teste',
            'data'=> '03/05/16',
            'hora'=>'12:00'
        ]);

        DB::table('consultas')->insert([
            'medico_id'=>1,
            'instituicao'=> 'apae',
            'paciente'=> 'teste 2',
            'status'=> 'PE',
            'descricao'=> 'atendimento teste',
            'data'=> '03/05/16',
            'hora'=>'12:00'
        ]); */


    }
}
''