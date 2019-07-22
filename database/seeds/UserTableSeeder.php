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
            'password' => bcrypt('adminadmin'),
            'level' => 0,
        ]);

        DB::table('users')->insert([
            'nim' => '1501702',
            'name' => 'Desphi Satria',
            'password' => bcrypt('adminadmin'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180595',
            'name' => 'AGUNG MAULANA FATHAN',
            'password' => bcrypt('10180595'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180596',
            'name' => 'ANNISA AMALIYAH RIZKIYANI',
            'password' => bcrypt('10180596'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180597',
            'name' => 'ANTA KHAERUN NUZULAN',
            'password' => bcrypt('10180597'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180598',
            'name' => 'ARIS MUNANDAR',
            'password' => bcrypt('10180598'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180599',
            'name' => 'AUDITRA ALDIFASYA',
            'password' => bcrypt('10180599'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180600',
            'name' => 'AZIZ MUHAMMAD LABIB',
            'password' => bcrypt('10180600'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180601',
            'name' => 'DENDI SEPTRIAWAN',
            'password' => bcrypt('10180601'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180602',
            'name' => 'DESTYA FITRIANI',
            'password' => bcrypt('10180602'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180603',
            'name' => 'DINA KUSNAENI',
            'password' => bcrypt('10180603'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180604',
            'name' => 'FADHIL MUHAMMAD AZKA',
            'password' => bcrypt('10180604'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180605',
            'name' => 'FAKHRI PUTRA NENDA',
            'password' => bcrypt('10180605'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180606',
            'name' => 'FARHAN FATURRAHMAN',
            'password' => bcrypt('10180606'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180607',
            'name' => 'FITRA AKSAN NURPRIYA',
            'password' => bcrypt('10180607'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180608',
            'name' => 'HAIDIR YUDATAMA',
            'password' => bcrypt('10180608'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180609',
            'name' => 'IRSYAD ROSYADI',
            'password' => bcrypt('10180609'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180610',
            'name' => 'JUDIKA',
            'password' => bcrypt('10180610'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180611',
            'name' => 'LENA MARLENA',
            'password' => bcrypt('10180611'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180612',
            'name' => 'MAURRA GIANNY RASHELIA',
            'password' => bcrypt('10180612'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180613',
            'name' => 'MOHAMAD GIRI SUNDAVA',
            'password' => bcrypt('10180613'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180614',
            'name' => 'MUHAMAD FACHRIL FADILLAH',
            'password' => bcrypt('10180614'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180615',
            'name' => 'MUHAMMAD FAUZAN',
            'password' => bcrypt('10180615'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180616',
            'name' => 'MUHAMMAD YUDHA PRATAMA',
            'password' => bcrypt('10180616'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180617',
            'name' => 'NURHALIZA DEWI PRASETYO',
            'password' => bcrypt('10180617'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180618',
            'name' => 'RAHMAH AMBARWATI',
            'password' => bcrypt('10180618'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180619',
            'name' => 'RAIHAN AKBAR',
            'password' => bcrypt('10180619'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180620',
            'name' => 'RAMADHANA RIZKI ZULKARNAEN',
            'password' => bcrypt('10180620'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180621',
            'name' => 'RANGGA WIJAYA KUSUMAH',
            'password' => bcrypt('10180621'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180622',
            'name' => 'REYNALDA ADY SAPUTRI',
            'password' => bcrypt('10180622'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180623',
            'name' => 'REZA MUHAMMAD PRATAMA',
            'password' => bcrypt('10180623'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180624',
            'name' => 'RIZKY FAHRUDIN',
            'password' => bcrypt('10180624'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180625',
            'name' => 'SITI NURJANAH',
            'password' => bcrypt('10180625'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180626',
            'name' => 'WIDIA SIPA NURSILA',
            'password' => bcrypt('10180626'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180627',
            'name' => 'WILDAN SADDAM NUGRAHA',
            'password' => bcrypt('10180627'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180628',
            'name' => 'WINDA SRI FANI HERAWATI',
            'password' => bcrypt('10180628'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '10180629',
            'name' => 'ZEHAN NURHAFIZH',
            'password' => bcrypt('10180629'),
            'level' => 1,
        ]);
        
    }
}
