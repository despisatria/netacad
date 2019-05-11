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
            'nim' => '1700916',
            'name' => 'Althea Rizqi A',
            'password' => bcrypt('1700916'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705008',
            'name' => 'Andita Khairunnisa',
            'password' => bcrypt('1705008'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703861',
            'name' => 'Ani Mulyani',
            'password' => bcrypt('1703861'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701499',
            'name' => 'Annisa F',
            'password' => bcrypt('1701499'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1700701',
            'name' => 'Bisma Pandara S',
            'password' => bcrypt('1700701'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705408',
            'name' => 'Bobby M Ilham',
            'password' => bcrypt('1705408'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703734',
            'name' => 'Dela Adelia',
            // 'email' => 'admin@admin.com',
            'password' => bcrypt('1703734'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1704734',
            'name' => 'Dena Meilani',
            'password' => bcrypt('1704734'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703571',
            'name' => 'Dina Dwi H',
            'password' => bcrypt('1703571'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702329',
            'name' => 'Fachrul Rusmayadil',
            'password' => bcrypt('1702329'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701969',
            'name' => 'Faisal ',
            // 'email' => 'admin@admin.com',
            'password' => bcrypt('1701969'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701583',
            'name' => 'Guntur Nugraha',
            'password' => bcrypt('1701583'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705007',
            'name' => 'Hilmi Adlannaafi',
            'password' => bcrypt('1705007'),
            'level' => 0,
        ]);

        DB::table('users')->insert([
            'nim' => '1701913',
            'name' => 'Laudita Latifah',
            'password' => bcrypt('1701913'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702559',
            'name' => 'M. Habib Ibnu ',
            'password' => bcrypt('1702559'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701112',
            'name' => 'Meirista ',
            'password' => bcrypt('1701112'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1700138',
            'name' => 'Mia Rosmiati',
            'password' => bcrypt('1700138'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705401',
            'name' => 'Muhammad Faisal Alfarizki',
            'password' => bcrypt('1705401'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703168',
            'name' => 'Muhammad Nugraha',
            'password' => bcrypt('1703168'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702897',
            'name' => 'Naufal Nur Azmi',
            'password' => bcrypt('1702897'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701113',
            'name' => 'Niko C',
            'password' => bcrypt('1701113'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702658',
            'name' => 'Opik Sofian',
            'password' => bcrypt('1702658'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703473',
            'name' => 'Pernik Dessi Y',
            'password' => bcrypt('1703473'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702235',
            'name' => 'Purnama Muntaharridwan',
            'password' => bcrypt('1702235'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1703036',
            'name' => 'Raka Rahmat G ',
            'password' => bcrypt('1703036'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701507',
            'name' => 'Ramdan Syaripudin ',
            'password' => bcrypt('1701507'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702642',
            'name' => 'Reni Nuryati',
            'password' => bcrypt('1702642'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1701575',
            'name' => 'Risky Mulia',
            'password' => bcrypt('1701575'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705508',
            'name' => 'Taufik Nurrahman P',
            'password' => bcrypt('1705508'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1705685',
            'name' => 'Vania Apriliana',
            'password' => bcrypt('1705685'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702092',
            'name' => 'Wawan Setiawan',
            'password' => bcrypt('1702092'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1702669',
            'name' => 'Willy Chandra',
            'password' => bcrypt('1702669'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1700538',
            'name' => 'Yanrie Faisal',
            'password' => bcrypt('1700538'),
            'level' => 1,
        ]);

        DB::table('users')->insert([
            'nim' => '1700795',
            'name' => 'Yayang Sri Marlina',
            'password' => bcrypt('1700795'),
            'level' => 1,
        ]);
    }
}
