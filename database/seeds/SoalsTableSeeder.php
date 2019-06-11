<?php

use Illuminate\Database\Seeder;

class SoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('soals')->insert([
            'soal' => 'Sebuah aturan atau standar yang mengatur bagaimana terjadinya hubungan dan perpindahan data antara dua atau lebih komputer yang saling terhubung, dikenal dengan istilah ....',
            'opsiA' => 'Internet Protocol',
            'opsiB' => 'Protokol Jaringan',
            'opsiC' => 'Standarisasi',
            'opsiD' => 'Rule',
            'opsiE' => 'Peraturan',
            'a' => 1,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Dalam jaringan komputer, pengidentifikasian suatu komputer pada jaringan sehingga memiliki identitas yang unik sangat penting. Proses pengidentifikasian komputer tersebut disebut ....',
            'opsiA' => 'Broadcast',
            'opsiB' => 'Subnetting',
            'opsiC' => 'Pengalamatan IP',
            'opsiD' => 'Pembagian kelas',
            'opsiE' => 'Sistem penamaan',
            'a' => 0,
            'b' => 0,
            'c' => 1,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Pada dasarnya, arsitektur Ipv4 menganut konsep ....',
            'opsiA' => 'Unicast Addresses',
            'opsiB' => 'Classfull Addressing',
            'opsiC' => 'Anycast Addresses',
            'opsiD' => 'Classess Addressing',
            'opsiE' => 'Multicast Addresses',
            'a' => 0,
            'b' => 1,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Alamat kelas D digunakan untuk keperluan ....',
            'opsiA' => 'Multicast',
            'opsiB' => 'Broadcast',
            'opsiC' => 'Unicast',
            'opsiD' => 'Private',
            'opsiE' => 'Public',
            'a' => 1,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Nilai oktet pertama dari IP Address kelas A adalah ....',
            'opsiA' => '240-255',
            'opsiB' => '224-239',
            'opsiC' => '192-223',
            'opsiD' => '128-191',
            'opsiE' => '1-127',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 1,
        ]);

         DB::table('soals')->insert([
            'soal' => 'IP Address kelas C memiliki jumlah host untuk setiap network sebanyak ....',
            'opsiA' => '254 host',
            'opsiB' => '256 host',
            'opsiC' => '65.534 host',
            'opsiD' => '65.536 host',
            'opsiE' => '1024 host',
            'a' => 0,
            'b' => 1,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Diketahui sebuah IP 200.168.20.2, yang menunjukkan network ID adalah ....',
            'opsiA' => 'x.x.20.2',
            'opsiB' => 'x.168.20.2',
            'opsiC' => '200.x.x.x',
            'opsiD' => 'x.x.x.2',
            'opsiE' => '200.168.20.x',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 1,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Perhatikan kalimat dibawah ini!<br> 1) Panjang Net ID : 24 bit <br> 2) Panjang Host ID : 6 bit <br> 3) Byte pertama : 192-223 <br> 4) Bit pertama : 1111 <br> Yang termasuk ciri-ciri IP kelas C adalah ....',
            'opsiA' => '1, 2, 3',
            'opsiB' => '1, 3, 4',
            'opsiC' => '1 dan 3',
            'opsiD' => '2 dan 4',
            'opsiE' => '4',
            'a' => 0,
            'b' => 0,
            'c' => 1,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Dalam pengalamatan IP, IP Address yang diidentifikasikan untuk menunjukan alamat jaringan atau identitas jaringan disebut ....',
            'opsiA' => 'Netmask',
            'opsiB' => 'Route ID',
            'opsiC' => 'Host ID',
            'opsiD' => 'Network ID',
            'opsiE' => 'Broadcast',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 1,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Jika terdapat IP address dengan prefix /29. Maka IP Address valid yang dapat digunakan adalah sebanyak .... ',
            'opsiA' => '6 host',
            'opsiB' => '8 host',
            'opsiC' => '14 host',
            'opsiD' => '16 host',
            'opsiE' => '32 host',
            'a' => 1,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Salah satu keunggulan IP v6, yaitu Autoconfiguration. Maksud dari Autoconfiguration adalah ....',
            'opsiA' => 'Keamanan pada IPv6 menggunakan teknik enkripsi yang rumit, sehingga sulit ditebak oleh hacker',
            'opsiB' => 'IPv6 memiliki protokol QoS yang terintegrasi dengan baik',
            'opsiC' => 'Menyediakan lebih banyak IP address',
            'opsiD' => 'Komputer yang terhubung degan jaringan IPv6 mendapatkan IP address langsung dari router',
            'opsiE' => 'Meningkatkan fleksibilitas untuk koneksi ke internet',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 1,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Jumlah host address yang disediakan oleh IPv6 adalah sebanyak …',
            'opsiA' => '2<sup>16</sup>',
            'opsiB' => '2<sup>32</sup>',
            'opsiC' => '2<sup>64</sup>',
            'opsiD' => '2<sup>128</sup>',
            'opsiE' => '2<sup>256</sup>',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 1,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Pernyataan yang benar mengenai IPv6 adalah ....',
            'opsiA' => 'Panjang total bit IPv6 adalah 64 bit',
            'opsiB' => 'IPv6 dapat menampung alamat hingga 3,4 x 10<sup>35</sup>',
            'opsiC' => 'IPv6 tidak mendukung format prefix',
            'opsiD' => 'Ruang alokasi alamat dibagi menjadi empat kelas',
            'opsiE' => 'Penulisan IPv6 menggunakan bilangan hexadecimal',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 1,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Dari sebuah subnet mask 255.255.240.0, dapat diketahui jumlah host yang valid untuk setiap subnetnya adalah ....',
            'opsiA' => '2<sup>12</sup> – 2',
            'opsiB' => '2<sup>4</sup>',
            'opsiC' => '2<sup>4</sup> – 2',
            'opsiD' => '2<sup>20</sup> – 2',
            'opsiE' => '2<sup>16</sup>',
            'a' => 1,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Perhatikan kalimat-kalimat dibawah ini! <br> 1) Tentukan net mask <br> 2) Beri net Id <br> 3) Urutkan berdasarkan penggunaan host terbanyak <br> 4) Beri IP broadcast <br> Urutan yang benar dalam melakukan VLSM adalah ....',
            'opsiA' => '3-2-1-4',
            'opsiB' => '3-1-2-4',
            'opsiC' => '3-4-2-1',
            'opsiD' => '3-2-4-1',
            'opsiE' => '3-4-1-2',
            'a' => 0,
            'b' => 1,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Berikut ini yang merupakan fungsi dari VLSM adalah ....',
            'opsiA' => 'Meminimalisasi host kosong yang ada pada satu network',
            'opsiB' => 'Menggabungkan dua atau lebih blok IP address menjadi satu kesatuan',
            'opsiC' => 'Menggabungkan jaringan menjadi satu',
            'opsiD' => 'Membagi network berdasarkan kelas',
            'opsiE' => 'Mengelompokkan beberapa subnet bersama untuk jaringan routing',
            'a' => 1,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Sebuah perusahaan memiliki IP address dan ingin membaginya sesuai jumlah divisi yang ada, yaitu 6 divisi, dimana tiap divisi masing-masing memiliki host sebanyak :<br> Divisi A : 3 host <br> Divisi B : 8 host <br> Divisi C : 17 host <br> Divisi D : 5 host <br> Divisi E : 10 host <br> Divisi F : 10 host <br> Maka pembagian yang mungkin dilakukan dengan teknik ....',
            'opsiA' => 'Network Address Translation',
            'opsiB' => 'Subnetting Classfull',
            'opsiC' => 'Variable Length Subnet Mask',
            'opsiD' => 'Classess Inter-Domain Routing',
            'opsiE' => 'Port Address Translation',
            'a' => 0,
            'b' => 0,
            'c' => 1,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Diketahui network 192.168.68.0/24 akan dibuat 3 subnet dengan jumlah sebagai berikut : <br> Ruangan A = 42 <br> Ruangan B = 13 <br> Ruangan C = 25 <br> Range host untuk ruangan A adalah ....',
            'opsiA' => '192.168.68.0-192.168.68.63',
            'opsiB' => '192.158.68.0-192.168.68.62',
            'opsiC' => '192.158.68.0-192.168.68.61',
            'opsiD' => '192.168.68.0-192.168.68.62',
            'opsiE' => '192.158.68.0-192.168.68.63',
            'a' => 1,
            'b' => 0,
            'c' => 0,
            'd' => 0,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Diketahui IP Address 192.172.20.22 /29. CIDR dari subnetmask IP Address tersebut adalah ....',
            'opsiA' => '255.255.255.192',
            'opsiB' => '255.255.255.224',
            'opsiC' => '255.255.255.240',
            'opsiD' => '255.255.255.248',
            'opsiE' => '255.255.255.252',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 1,
            'e' => 0,
        ]);

         DB::table('soals')->insert([
            'soal' => 'Diketahui network 192.168.68.0/24 akan dibuat 3 subnet dengan jumlah sebagai berikut : <br> Ruangan A = 42 <br> Ruangan B = 13 <br> Ruangan C = 25 <br> Nilai prefix pada ruangan C adalah .... ', 
            'opsiA' => '/24',
            'opsiB' => '/25',
            'opsiC' => '/26',
            'opsiD' => '/27',
            'opsiE' => '/28',
            'a' => 0,
            'b' => 0,
            'c' => 0,
            'd' => 1,
            'e' => 0,
        ]);
    }
}
