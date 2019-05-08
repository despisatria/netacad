<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nim' => '1231231',
            'name' => 'admin',
            // 'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'level' => 0,
        ]);
        DB::table('users')->insert([
            'nim' => '1501702',
            'name' => 'Ziady Mubaraq',
            // 'email' => 'ziady@gmail.com',
            'password' => bcrypt('adminadmin'),
            'level' => 1,
        ]);
        DB::table('users')->insert([
            'nim' => '1501702',
            'name' => 'Desphi Satria',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('adminadmin'),
            'level' => 1,
        ]);
    }
}
