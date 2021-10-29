<?php

namespace App\Controllers;

use App\Models\pengguna12200454;
use Config\services;

class Login extends BaseController
{
    public function cekLogin()
    {
        $e = $this->request->getPost('email');
        $s = $this->request->getPost('sandi');
        return view('halaman/beranda', ['email' => $e, 'sandi' => $s]);
        $email = $this->request->getPost('email');
        $sandi = $this->request->getPost('sandi');

        $v = $this->validate([
            'email' => 'required',
            'sandi' => 'required'
        ], [
            'email' => [
                'required' => 'Email tidak boleh kosong'
            ],
            'sandi' => [
                'required' => 'Sandi tidak boleh kosong'
            ]
        ]);

        $this->session->set('email', $email);
        $this->session->set('sandi', $sandi);

        if ($v == false) {
            $this->session->setFlashdata('validator', $this->validator);
            return redirect()->to('/Login');
        } else {

            $vl = (new Pengguna12200454())->cekLogin($email, $sandi);

            if ($vl == null) {
                return redirect()->to('/login')->with('error', 'User dan sandi salah');
            } else {
                $this->session->set('sudahLogin', true);
                return redirect()->to('/beranda');
            }
        }
    }

    public function beranda(){

    }
}