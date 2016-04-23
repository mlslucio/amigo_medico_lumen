<?php

use Illuminate\Database\Seeder;

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
         DB::table('agendas')->insert([
			'data_emissao'=> str_random(10),
			'dia_semana'=> str_random(10),
			'saldo'=> str_random(10),
			'quantidade'=> str_random(10),
			'saldo_empenhado'=> str_random(10),
			'clinica_id'=> str_random(10),
        ]);
    }
}
