<?php

use Illuminate\Database\Seeder;

class EvaluasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluasis')->insert([
            'user_id' => '1',
            'materi' => 'ipaddress',
            'nilai' => '50',
        ]); 
    }
}
