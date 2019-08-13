<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'nim' => '1231231',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rIG0HqxELSMbr.jD5JiIQOUUwvBL./G1JdgxKXbVf4ZIllu1RyfSG',
                'level' => 0,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Desphi Satria',
                'nim' => '1501702',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vnl2bQdFdC6TsNCjSfbSRuZYkI8zZejcRPGLjOFHieN6upfqJEkY6',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AGUNG MAULANA FATHAN',
                'nim' => '10180595',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GVIg6txTzCmPIfMNfHP/t./34sXVRYnUuEDIJ1SA8PZCO5CivWAma',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ANNISA AMALIYAH RIZKIYANI',
                'nim' => '10180596',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tilV6awk3ZKcha261JH9O.3CKU62AXJJWg4bdW.WMidZ/pdHCuAom',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ANTA KHAERUN NUZULAN',
                'nim' => '10180597',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MIZrBykcsC/gUROK5sxU9u33iJXsnCSpCrX/PtMwQVWjmjsWdLeE.',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ARIS MUNANDAR',
                'nim' => '10180598',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qjUc6w/k/zSjyf7GI74sUuBDJLBefQ1r5gpMjaNF8dKg33fWFy8UO',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'AUDITRA ALDIFASYA',
                'nim' => '10180599',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ECNqWpXYmzAwSTfO3aBRuObqApTO0nLPKnbBUoFxiXJRKKHC7Xare',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'AZIZ MUHAMMAD LABIB',
                'nim' => '10180600',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0UVB79kdm2msj5Kl3vrsLumIDWanWv2V.sH7xQCcNjJTTaTJFW8ti',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'DENDI SEPTRIAWAN',
                'nim' => '10180601',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QCg1.L4vTqweI.Ju8XVj8.Ahd6TYYcRD4O1q7AzhF1MxNBZcSMKoO',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'DESTYA FITRIANI',
                'nim' => '10180602',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LwYi4zchJpmP/xqM8GTAS..WwvtF31lFt1Bt5mgEJVObnu1A9qoQe',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'DINA KUSNAENI',
                'nim' => '10180603',
                'email_verified_at' => NULL,
                'password' => '$2y$10$E./2Q4C4vTfFr2pBZIIu6eZybmwqD1XVlExNhDlnNL1OYgbRKJVOW',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'FADHIL MUHAMMAD AZKA',
                'nim' => '10180604',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x8j2WVnDdXSnAYRQQ41dOO8pawCk.j50WLHY3kFJ0QHcaok4IMwVi',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'FAKHRI PUTRA NENDA',
                'nim' => '10180605',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PV3F7GVHA3bbvkPJbV.JkuB6Mroe6dTReoGgK1lr8NqrkLpfMkk2G',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'FARHAN FATURRAHMAN',
                'nim' => '10180606',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DD/otAQL2/AyD8TZDvRETeV4NcwrlL/kzr6uuup7aZqd6JRkZ51mm',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'FITRA AKSAN NURPRIYA',
                'nim' => '10180607',
                'email_verified_at' => NULL,
                'password' => '$2y$10$daD//XDuro5eLg3se378P.J89Mw6C55W/lCaW0b1PL6VuL1dLG7zm',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'HAIDIR YUDATAMA',
                'nim' => '10180608',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bJQI8SEoUVOAQF28rHcegOSmca4ZMspeuqRvUOJAt2N6eDI8us45G',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'IRSYAD ROSYADI',
                'nim' => '10180609',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uVCpldqMno/MqvfyAZURHOL3zJgwhjBwyRuK7tdwbkXykWermuFFO',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'JUDIKA',
                'nim' => '10180610',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vdLPZcAlODogo4QBybLGauYiabVDB/hUHx4JLzjS79V8C4PHKPPKK',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'LENA MARLENA',
                'nim' => '10180611',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sR/zZpFtV07ynChjX3FmwuAUkixIAPAvV3x3PLYQ4EW7WOfpsN.Ra',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'MAURRA GIANNY RASHELIA',
                'nim' => '10180612',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LxCmIop./HqvAmJLtTor7O99Dg6M6iqmQlcpPs3rUFi5ISOit8KKG',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'MOHAMAD GIRI SUNDAVA',
                'nim' => '10180613',
                'email_verified_at' => NULL,
                'password' => '$2y$10$egXKPlg0LRcBa9MUxfckNe9fk5p0Z3y6mwED40/GF9aa3tmqogTty',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'MUHAMAD FACHRIL FADILLAH',
                'nim' => '10180614',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IIHnlK7VlcwFyfTQrsWu/.r.tq893Nt3H2ucvXMpjndrsf5ax8Gia',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'MUHAMMAD FAUZAN',
                'nim' => '10180615',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DbnCcXuynI7mScq9QShGGegt0WU61gCLVMQJSEg1rbt0O3ubc8VMm',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'MUHAMMAD YUDHA PRATAMA',
                'nim' => '10180616',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fcy6ZaV9ufeUPO8k3.J0.O72Uhc58T6KUL16IYVJJzvPB.aDAmAr.',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'NURHALIZA DEWI PRASETYO',
                'nim' => '10180617',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6U7qg9fbKmgOG6qw8uhkiualikk4h6x/mtd3TGsh9t6sFUaNnrJSS',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'RAHMAH AMBARWATI',
                'nim' => '10180618',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZsXv9MsBltlCvED7qhm0P.89rhrpTOuLy9ZZkVGHwP77BrZg0bHCy',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'RAIHAN AKBAR',
                'nim' => '10180619',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RcCgWOCWYBOTwMoYT4nu6e30FXk7pt0zfoW6VdVHKkP0tevKxzZLu',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'RAMADHANA RIZKI ZULKARNAEN',
                'nim' => '10180620',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FxBLElVF/49Lq78z9UN6.eWn7NmJAgGbfLkrR7H16I71WxRhBeKZ6',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'RANGGA WIJAYA KUSUMAH',
                'nim' => '10180621',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PPLkbxqC4sEvYcZi6ORku.2OAtCRn8n2LLl1gWnGvSZxbxNNd8GYW',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'REYNALDA ADY SAPUTRI',
                'nim' => '10180622',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0Wfvu1IU9MmyeiMbdg/adeb5AXppSeITaasBafNxZhqqAL9UykeRy',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'REZA MUHAMMAD PRATAMA',
                'nim' => '10180623',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p.LqH7O.XCNj9xxFfW2zv.gngXH01lDCGipy8e29DZezN4/1aOzTO',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'RIZKY FAHRUDIN',
                'nim' => '10180624',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Gf80P2Lcm3paUnqtUp57oezFc2wy/rlj3aRC3bFiV69IXJEN1SePy',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'SITI NURJANAH',
                'nim' => '10180625',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T1vG15xU4Rm7ERBTUg4A6OI71R5YfviZU5cUv3L6KBd8lscZCGqBO',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'WIDIA SIPA NURSILA',
                'nim' => '10180626',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tuxj6Z48jlSBQFqch8oppui4wnuZSM4dkIlEX5V0mJYZkLq55PvWi',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'WILDAN SADDAM NUGRAHA',
                'nim' => '10180627',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uT9BbZPI7D32I21gmaNI.ewZPW6e1btmKFjsB6gEcEmJmwt6Qe/Eu',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'WINDA SRI FANI HERAWATI',
                'nim' => '10180628',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0cqrHxHAmv2CaF9682qMSuqLy4gHhzCFdTQN3tp9CNPFIVNVJxIrq',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'ZEHAN NURHAFIZH',
                'nim' => '10180629',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1rNXY./QeRWo0BlP2l2JgeNzUVm43HM7mEa2f4Dslx3vFu7//Hf/6',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Muhammad Fauzan',
                'nim' => '10180615',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SAwH84dOt0P1nwC/jp2eu.PmLXaRSjWAeOiKq2HB/VOILhNGfEOyO',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-23 06:41:04',
                'updated_at' => '2019-07-23 06:41:04',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'yanirahmawati',
                'nim' => '1007',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t3Jj39m31gW35w.kW7Vfqe9o2lAYl.3Oy/ouyi.ql6a0MWITnLPSe',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:16:28',
                'updated_at' => '2019-07-24 04:16:28',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'jajang cahyana',
                'nim' => '1005',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FOZ7ajG93pq81945ECU1y.TJTaMPJHyNiIV4w1LQPmFC/HkTmx8/S',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:16:35',
                'updated_at' => '2019-07-24 04:16:35',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'ziana balqis',
                'nim' => '1008',
                'email_verified_at' => NULL,
                'password' => '$2y$10$teeDWLZEf4X7apK7FUEJduFIv1JbUJKbvZtY.zQxYGzS27oyIV8Uy',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:17:02',
                'updated_at' => '2019-07-24 04:17:02',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'rizky fauzi hilmansyah',
                'nim' => '1009',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fQXG0WooRsEM3VuQVNu28edJr6CT4V3YTcHt5BqWFT3YishXdr3V.',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:17:06',
                'updated_at' => '2019-07-24 04:17:06',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'fajar aulia rahman',
                'nim' => '1002',
                'email_verified_at' => NULL,
                'password' => '$2y$10$G8KL2yvOnQXTKNEVttjkpefC5sN8mKyt8122g9SphkwrhWetG/Nt2',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:17:07',
                'updated_at' => '2019-07-24 04:17:07',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Siti UlfahNurul Hidayati',
                'nim' => '1006',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nPa.OcS/adDTw.kynHVzVucVf5ik5T0RsGXw7kSX10S7QbvnamsCy',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:17:07',
                'updated_at' => '2019-07-24 04:17:07',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Febhy Yulianti',
                'nim' => '1004',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fHYrvJ5rBYelsQD6NYPhl.SlP/oRJRLo7wj7iuZy8K4OqWGF50Amm',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-07-24 04:18:39',
                'updated_at' => '2019-07-24 04:18:39',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Nurman Aji',
                'nim' => '1010',
                'email_verified_at' => NULL,
                'password' => '$2y$10$thgiVgkpoTAD8uVLFZaEwOFJCMLWNhGDxLmEy9AI0pejz9jycQTZ.',
                'level' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-08-07 00:41:59',
                'updated_at' => '2019-08-07 00:41:59',
            ),
        ));
        
        
    }
}