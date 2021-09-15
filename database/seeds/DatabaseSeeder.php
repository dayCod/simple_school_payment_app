<?php

use Illuminate\Database\Seeder;
use App\petugas;
use App\status;
use App\kelas;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'username'=> 'admin',
        	'password'=> bcrypt('admin'),
        	'nama_petugas'=> 'master-admin',
            'email'=>'default@spp.com',
        	'level'=> 'admin'
        ]);

        status::create([
            'status'=> 'pending',
            'is_payed'=> '0'
        ]);

        status::create([
            'status'=> 'dibayar',
            'is_payed'=> '1'
        ]);

        kelas::create([
            'id_kelas'=> '1011',
            'kelas'=> 'X RPL 1',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1012',
            'kelas'=> 'X RPL 2',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1013',
            'kelas'=> 'X RPL 3',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1021',
            'kelas'=> 'X MM 1',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1022',
            'kelas'=> 'X MM 2',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1023',
            'kelas'=> 'X MM 3',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1031',
            'kelas'=> 'X TKJ 1',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1032',
            'kelas'=> 'X TKJ 2',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1033',
            'kelas'=> 'X TKJ 3',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1041',
            'kelas'=> 'X PBS 1',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1042',
            'kelas'=> 'X PBS 2',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1043',
            'kelas'=> 'X PBS 3',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1051',
            'kelas'=> 'X AK 1',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1052',
            'kelas'=> 'X AK 2',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1053',
            'kelas'=> 'X AK 3',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1061',
            'kelas'=> 'X OTKP 1',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1062',
            'kelas'=> 'X OTKP 2',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1063',
            'kelas'=> 'X OTKP 3',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1071',
            'kelas'=> 'X TB 1',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1072',
            'kelas'=> 'X TB 2',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1073',
            'kelas'=> 'X TB 3',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1081',
            'kelas'=> 'X BDP 1',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1082',
            'kelas'=> 'X BDP 2',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1083',
            'kelas'=> 'X BDP 3',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1111',
            'kelas'=> 'XI RPL 1',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1112',
            'kelas'=> 'XI RPL 2',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1113',
            'kelas'=> 'XI RPL 3',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1121',
            'kelas'=> 'XI MM 1',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1122',
            'kelas'=> 'XI MM 2', 
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1123',
            'kelas'=> 'XI MM 3',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1131',
            'kelas'=> 'XI TKJ 1',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1132',
            'kelas'=> 'XI TKJ 2',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1133',
            'kelas'=> 'XI TKJ 3',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1141',
            'kelas'=> 'XI PBS 1',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1142',
            'kelas'=> 'XI PBS 2',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1143',
            'kelas'=> 'XI PBS 3',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1151',
            'kelas'=> 'XI AK 1',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1152',
            'kelas'=> 'XI AK 2',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1153',
            'kelas'=> 'XI AK 3',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1161',
            'kelas'=> 'XI OTKP 1',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1162',
            'kelas'=> 'XI OTKP 2',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1163',
            'kelas'=> 'XI OTKP 3',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1171',
            'kelas'=> 'XI TB 1',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1172',
            'kelas'=> 'XI TB 2',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1173',
            'kelas'=> 'XI TB 3',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1181',
            'kelas'=> 'XI BDP 1',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1182',
            'kelas'=> 'XI BDP 2',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1183',
            'kelas'=> 'XI BDP 3',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1211',
            'kelas'=> 'XII RPL 1',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1212',
            'kelas'=> 'XII RPL 2',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1213',
            'kelas'=> 'XII RPL 3',
            'jurusan'=> 'Rekayasa Perangkat Lunak'
        ]);

        kelas::create([
            'id_kelas'=> '1221',
            'kelas'=> 'XII MM 1',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1222',
            'kelas'=> 'XII MM 2',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1223',
            'kelas'=>'XII MM 3',
            'jurusan'=> 'Multimedia'
        ]);

        kelas::create([
            'id_kelas'=> '1231',
            'kelas'=> 'XII TKJ 1',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1232',
            'kelas'=> 'XII TKJ 2',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1233',
            'kelas'=> 'XII TKJ 3',
            'jurusan'=> 'Teknik Komputer dan Jaringan'
        ]);

        kelas::create([
            'id_kelas'=> '1241',
            'kelas'=> 'XII PBS 1',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1242',
            'kelas'=> 'XII PBS 2',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1243',
            'kelas'=> 'XII PBS 3',
            'jurusan'=> 'Perbankan Syariah'
        ]);

        kelas::create([
            'id_kelas'=> '1251',
            'kelas'=> 'XII AK 1',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1252',
            'kelas'=> 'XII AK 2',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1253',
            'kelas'=> 'XII AK 3',
            'jurusan'=> 'Akuntansi Lembaga Keuangan'
        ]);

        kelas::create([
            'id_kelas'=> '1261',
            'kelas'=> 'XII OTKP 1',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1262',
            'kelas'=> 'XII OTKP 2',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1263',
            'kelas'=> 'XII OTKP 3',
            'jurusan'=> 'Otomatisasi Tata Kelola Perkantoran'
        ]);

        kelas::create([
            'id_kelas'=> '1271',
            'kelas'=> 'XII TB 1',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1272',
            'kelas'=> 'XII TB 2',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1273',
            'kelas'=> 'XII TB 3',
            'jurusan'=> 'Tata Busana'
        ]);

        kelas::create([
            'id_kelas'=> '1281',
            'kelas'=> 'XII BDP 1',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1282',
            'kelas'=> 'XII BDP 2',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);

        kelas::create([
            'id_kelas'=> '1283',
            'kelas'=> 'XII BDP 3',
            'jurusan'=> 'Bisnis Daring Pemasaran'
        ]);
        
    }
    
}
