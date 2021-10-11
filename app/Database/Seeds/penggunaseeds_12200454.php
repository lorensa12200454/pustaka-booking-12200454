<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
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
                'nama'      => '12200454',
                'password'  => md5('lorensa')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}