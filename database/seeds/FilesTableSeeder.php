<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            'user_id' => '2',
            'nama' => 'materi.pdf',
            'lokasi' => 'public/files/materi.pdf',
            'materi' => 'ipaddress',
        ]);
    }
}
