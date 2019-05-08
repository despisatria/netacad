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
            'name' => 'Desphi Satria',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('adminadmin'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1700916',
            'name' => 'DesphiSatria',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('adminadmin'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705008',
            'name' => 'Althea Rizqi A',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1705008'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703861',
            'name' => 'Andita Khairunnisa',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1703861'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701499',
            'name' => 'Ani Mulyani',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1701499'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1700701',
            'name' => 'Annisa F',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1700701'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705408',
            'name' => 'Bisma Pandara S',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1705408'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703734',
            'name' => 'Bobby M Ilham',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1703734'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1704734',
            'name' => 'Dela Adelia',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1704734'),
            'level' => 1,
        ]); 

        DB::table('users')->insert([
            'nim' => '1703571',
            'name' => 'Dina Dwi H ',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1703571'),
            'level' => 1,
        ]); 

        DB::table('users')->insert([
            'nim' => '1702329',
            'name' => 'Fachrul Rusmayadi ',
            // 'email' => 'kuya@gmail.com',
            'password' => bcrypt('1702329'),
            'level' => 1,
        ]); 
    }
}
