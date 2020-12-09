<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert([
            'id_user' => 1,
            'titulo' => "Titanic",
            'ano_lancamento' => "2007",
            'tempo' => "02",
            'created_at'=>new \DateTime('now'),
            'updated_at'=>new \DateTime('now'),
        ]);

        DB::table('movie')->insert([
            'id_user' => 2,
            'titulo' => "E o vento levou",
            'ano_lancamento' => "1940",
            'tempo' => "03",
            'created_at'=>new \DateTime('now'),
            'updated_at'=>new \DateTime('now'),
        ]);
    }
}
