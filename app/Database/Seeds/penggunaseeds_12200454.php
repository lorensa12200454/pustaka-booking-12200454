<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200454;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'lorensa',
                'password'  => md5('12200454')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => 'lorensa',
                'password'  => md5('12200454')
            ]
        ];

        $p = new Pengguna12200454();
        $p->insertBatch($data);
    }
}