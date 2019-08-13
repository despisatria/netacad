<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('files')->delete();
        
        \DB::table('files')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 21,
                'nama' => 'Mohamad Giri Sundava_Praktikum.pkt',
                'lokasi' => 'public/files/Opf6xt24ruH5oiGW99sfgesgnhM4XgcNhDk1I48D.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:28:07',
                'updated_at' => '2019-07-23 07:28:07',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'nama' => 'Annisa AR_praktikum.pkt',
                'lokasi' => 'public/files/Ll8DxDKnuaKYWRF6RpWDKXvfvo4tVbC90HTfLA6c.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:29:16',
                'updated_at' => '2019-07-23 07:29:16',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 8,
                'nama' => 'Aziz Muhammad Labib_Praktikum.pkt',
                'lokasi' => 'public/files/Sa0F17Kvm3wRaYUJnao1PHDyocCVhYpbQDXI1DKD.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:29:18',
                'updated_at' => '2019-07-23 07:29:18',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 33,
                'nama' => 'Siti Nurjanah_Praktikum.pkt',
                'lokasi' => 'public/files/7c5GIxY98KppS07hybGH35pCeRQ2ZreaYlYtfk6U.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:29:20',
                'updated_at' => '2019-07-23 07:29:20',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'nama' => 'Agung maulana_praktikum.pkt',
                'lokasi' => 'public/files/WpQ32ZsXYQsDa1JU1HGXiQ78bXo0To7dHske2iSG.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:29:21',
                'updated_at' => '2019-07-23 07:29:21',
            ),
            5 => 
            array (
                'id' => 7,
                'user_id' => 28,
                'nama' => 'Ramadhana Rizki_Praktikum.pkt',
                'lokasi' => 'public/files/1JdstN6DxHqutuyxlMipzEXMNcyjcsJxRdzym68r.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:29:25',
                'updated_at' => '2019-07-23 07:29:25',
            ),
            6 => 
            array (
                'id' => 8,
                'user_id' => 20,
                'nama' => 'Maurra Gianny Rashelia_praktikum.pkt',
                'lokasi' => 'public/files/h2tRPvrnqXsyogeIh36Jd8MgEq4hLbz5gWTEwGgz.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:29:50',
                'updated_at' => '2019-07-23 07:29:50',
            ),
            7 => 
            array (
                'id' => 9,
                'user_id' => 36,
                'nama' => 'Winda sri fani_praktikum.pkt',
                'lokasi' => 'public/files/kmEMcePDCg3yb8ng7HA8iepeFcGnQWNhLldpsC9s.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:02',
                'updated_at' => '2019-07-23 07:30:02',
            ),
            8 => 
            array (
                'id' => 10,
                'user_id' => 29,
                'nama' => 'Rangga Wijaya_Praktikum.pkt',
                'lokasi' => 'public/files/5rQ5aXLKioUYc6TkWgnOsIeWRlOpDuMs8pOovUgB.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:15',
                'updated_at' => '2019-07-23 07:30:15',
            ),
            9 => 
            array (
                'id' => 11,
                'user_id' => 15,
                'nama' => 'fitra aksan_praktikum.pkt',
                'lokasi' => 'public/files/TUwewPsPptVgww5WxxtYJPqmCCtDKzJVgZr0gvOn.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:17',
                'updated_at' => '2019-07-23 07:30:17',
            ),
            10 => 
            array (
                'id' => 12,
                'user_id' => 34,
                'nama' => 'widia sipa nursila_praktikum.pkt',
                'lokasi' => 'public/files/POnwcVl2js1bjKtcfTbu811CDmr6Duq6znQF70HC.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:24',
                'updated_at' => '2019-07-23 07:30:24',
            ),
            11 => 
            array (
                'id' => 14,
                'user_id' => 26,
                'nama' => 'Rahmah ambarwati_praktikum.pkt',
                'lokasi' => 'public/files/CQoXMeK0Q7hitdMDwpsxvMHBCkmsTo8T8bR9IGar.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:35',
                'updated_at' => '2019-07-23 07:30:35',
            ),
            12 => 
            array (
                'id' => 15,
                'user_id' => 12,
                'nama' => 'fadhil muhammad azka_praktikum.pkt',
                'lokasi' => 'public/files/9e1fYeqOZhpZrNIPIHojs5jQOgdjw5LSQdlx86JO.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:45',
                'updated_at' => '2019-07-23 07:30:45',
            ),
            13 => 
            array (
                'id' => 16,
                'user_id' => 22,
                'nama' => 'Muhamad fachril_praktikum.pkt',
                'lokasi' => 'public/files/8XddVcB7K2bryu5wH5jVrIzRodXn0to2I2pcQMd8.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:30:50',
                'updated_at' => '2019-07-23 07:30:50',
            ),
            14 => 
            array (
                'id' => 17,
                'user_id' => 37,
                'nama' => 'Zehan Nurhafizh_praktikum.pkt',
                'lokasi' => 'public/files/q5ibEXIzjvEjIABcXg4Eh1y9DF4o9XfXZ2kTQVV3.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:31:52',
                'updated_at' => '2019-07-23 07:31:52',
            ),
            15 => 
            array (
                'id' => 18,
                'user_id' => 13,
                'nama' => 'Fakhri putra nenda_praktikum.pkt',
                'lokasi' => 'public/files/vlgNM2xGKInYW8vfSS1p4NHDEaMfslwgyQpUaIcs.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:34:14',
                'updated_at' => '2019-07-23 07:34:14',
            ),
            16 => 
            array (
                'id' => 19,
                'user_id' => 9,
                'nama' => 'Dendi septriawan_Praktikum.pkt',
                'lokasi' => 'public/files/dHzV3YijskK6StPkWT57T3Xi4gLSTsDKqXIEsiK8.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:34:59',
                'updated_at' => '2019-07-23 07:34:59',
            ),
            17 => 
            array (
                'id' => 20,
                'user_id' => 30,
                'nama' => 'Reynalda adi saputri_praktikum.pkt',
                'lokasi' => 'public/files/FuaGONWHV0hdrJ8Q0gtxVdImYzsqWa0nZzR3KLXX.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:48:13',
                'updated_at' => '2019-07-23 07:48:13',
            ),
            18 => 
            array (
                'id' => 21,
                'user_id' => 23,
                'nama' => 'Muhammad Fauzan_Praktikum.pkt',
                'lokasi' => 'public/files/sYlK3g4cSSSscVCkfHdFO2yQNC5hLIHEjxE6sedz.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:48:17',
                'updated_at' => '2019-07-23 07:48:17',
            ),
            19 => 
            array (
                'id' => 22,
                'user_id' => 32,
                'nama' => 'Rizky fahrudin_praktikum.pkt',
                'lokasi' => 'public/files/lBYGntnWhUyoiC1fkO2vDxvAmrkzo9Z7xx5lAV1g.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:49:29',
                'updated_at' => '2019-07-23 07:49:29',
            ),
            20 => 
            array (
                'id' => 23,
                'user_id' => 17,
                'nama' => 'Irsyad rosyadi_praktikum.pkt',
                'lokasi' => 'public/files/dRbdhF1espgqPOyqoLNjic3IqL4MoMpXTrm8yKMC.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:49:34',
                'updated_at' => '2019-07-23 07:49:34',
            ),
            21 => 
            array (
                'id' => 24,
                'user_id' => 16,
                'nama' => 'Haidir Yudatama_Praktikum.pkt',
                'lokasi' => 'public/files/LqdwSjhsK2ctLXpllrRs7rhNEXee9aywO40ErBqC.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:50:01',
                'updated_at' => '2019-07-23 07:50:01',
            ),
            22 => 
            array (
                'id' => 25,
                'user_id' => 27,
                'nama' => 'Raihan Akbar_praktikum.pkt',
                'lokasi' => 'public/files/UE2SkEK7GgJl638jPoAlN2kHDa7J6ele6ZyDeIDP.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:51:06',
                'updated_at' => '2019-07-23 07:51:06',
            ),
            23 => 
            array (
                'id' => 26,
                'user_id' => 11,
                'nama' => 'Dina Kusnaeni_Praktikum.pkt',
                'lokasi' => 'public/files/IJbj1OqiDg6WrwoZYJfMAddT7lnsVAxwiczscVxT.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:51:15',
                'updated_at' => '2019-07-23 07:51:15',
            ),
            24 => 
            array (
                'id' => 27,
                'user_id' => 24,
                'nama' => 'Muhammad Yudha_Praktikum.pkt',
                'lokasi' => 'public/files/UcevGfaGaQlkfXiMnR8z6XIDjezDb1VkOKpk8dCB.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:51:20',
                'updated_at' => '2019-07-23 07:51:20',
            ),
            25 => 
            array (
                'id' => 28,
                'user_id' => 6,
                'nama' => 'Aris munandar_praktikum.pkt',
                'lokasi' => 'public/files/z1mOUa9RppAm0HS93TRBsmWuPVMjW6Keh8XQFJdj.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:51:30',
                'updated_at' => '2019-07-23 07:51:30',
            ),
            26 => 
            array (
                'id' => 29,
                'user_id' => 35,
                'nama' => 'Wildan saddam_praktikum.pkt',
                'lokasi' => 'public/files/6cMxsnpOmtWSojDOYr9yLIxX8FqwjWwlVAx53p38.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:51:57',
                'updated_at' => '2019-07-23 07:51:57',
            ),
            27 => 
            array (
                'id' => 31,
                'user_id' => 18,
                'nama' => 'Judika_praktikum.pkt',
                'lokasi' => 'public/files/1RvEXWjXIHNzZ9WyRKxFZImmwZCO89QEDNsGkfU9.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:52:17',
                'updated_at' => '2019-07-23 07:52:17',
            ),
            28 => 
            array (
                'id' => 32,
                'user_id' => 19,
                'nama' => 'lena marlena_praktikum.pkt',
                'lokasi' => 'public/files/2uZec1W7ggYy7QoQUEaLCL7viXMZOiItPODxDOed.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:52:32',
                'updated_at' => '2019-07-23 07:52:32',
            ),
            29 => 
            array (
                'id' => 33,
                'user_id' => 14,
                'nama' => 'Farhan faturrahman_praktikum.pkt',
                'lokasi' => 'public/files/9aisXLh0LucMowd9Za4c6zw6d6mTzSGgmvoaidY8.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:53:15',
                'updated_at' => '2019-07-23 07:53:15',
            ),
            30 => 
            array (
                'id' => 34,
                'user_id' => 7,
                'nama' => 'Auditra Aldifasya_Praktikum.pkt',
                'lokasi' => 'public/files/F90JVMoQQbBbLHpwflhKCJADvv5BXTWl01yq8u2q.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:54:01',
                'updated_at' => '2019-07-23 07:54:01',
            ),
            31 => 
            array (
                'id' => 35,
                'user_id' => 10,
                'nama' => 'Destya Fitriani_praktiku.pkt',
                'lokasi' => 'public/files/17mVJ1wohr3TLszwgpcaKFdkvzv0A4RqgSbKh9ft.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:54:10',
                'updated_at' => '2019-07-23 07:54:10',
            ),
            32 => 
            array (
                'id' => 37,
                'user_id' => 25,
                'nama' => 'Nurhaliza Dewi Prasetyo_Praktikum.pkt',
                'lokasi' => 'public/files/vE5GfnFQOkZZ3D2QfUqfKIUqz3Jm63VX7rYCjlUO.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:55:20',
                'updated_at' => '2019-07-23 07:55:20',
            ),
            33 => 
            array (
                'id' => 38,
                'user_id' => 5,
                'nama' => 'Anta Khaerun_Praktikum.pkt',
                'lokasi' => 'public/files/XVFK6GHQRZdWzYeGQeVdDVtebVfLWibQkm2z9qec.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:55:38',
                'updated_at' => '2019-07-23 07:55:38',
            ),
            34 => 
            array (
                'id' => 40,
                'user_id' => 31,
                'nama' => 'reza muhammad pratama_prakitum.pkt',
                'lokasi' => 'public/files/kIb2Www6w0ShOqGKnoiC2d858jPfT0EJv4GCK0sc.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:56:10',
                'updated_at' => '2019-07-23 07:56:10',
            ),
            35 => 
            array (
                'id' => 41,
                'user_id' => 33,
                'nama' => 'Siti Nurjanah_Praktikum.pkt',
                'lokasi' => 'public/files/8haXczRh7quMnBe7Ozj4IMzigbcvblDgNzK8bcwo.pkt',
                'materi' => 'ipaddress',
                'created_at' => '2019-07-23 07:58:17',
                'updated_at' => '2019-07-23 07:58:17',
            ),
        ));
        
        
    }
}