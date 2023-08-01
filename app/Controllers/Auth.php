<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        //membuat user model untuk konek ke database
        $this->userModel = new UserModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        //menampilkan halaman login
        return view('layout/login');
    }
    public function loginG()
    {
        //menampilkan halaman login
        return view('layout/loginG');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama
        $user = $this->userModel->where('username', $data['username'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password'] != md5($data['password'])) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('Home/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set($sessLogin);
                return redirect()->to('home');
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('Home/login');
        }
    }

    public function logout()
    {
        //hancurkan session
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('welcome_message');
    }
    public function valid_loginG()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama
        $user = $this->userModel->where('username', $data['username'])->first();

        //cek apakah username ditemukan
        if ($user) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($user['password'] != md5($data['password'])) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('Home/loginG');
            } else {
                //jika benar, arahkan user masuk ke aplikasi
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $user['username'],
                    'level' => $user['level']
                ];
                $this->session->set($sessLogin);
                return redirect()->to('home/loginG');
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('home/loginG');
        }
    }
}
