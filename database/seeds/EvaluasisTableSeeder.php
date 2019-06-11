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
            'user_id' => 2,
            'materi' => 'ipaddress',
            'nilai' => 75,
        ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 3,
        //     'materi' => 'ipaddress',
        //     'nilai' => 80,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 4,
        //     'materi' => 'ipaddress',
        //     'nilai' => 100,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 5,
        //     'materi' => 'ipaddress',
        //     'nilai' => 95,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 6,
        //     'materi' => 'ipaddress',
        //     'nilai' => 100,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 7,
        //     'materi' => 'ipaddress',
        //     'nilai' => 50,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 8,
        //     'materi' => 'ipaddress',
        //     'nilai' => 65,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 9,
        //     'materi' => 'ipaddress',
        //     'nilai' => 75,
        // ]);

        // DB::table('evaluasis')->insert([
        //     'user_id' => 10,
        //     'materi' => 'ipaddress',
        //     'nilai' => 85,
        // ]);
    }
}
