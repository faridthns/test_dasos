<?php

namespace App\Controllers;

use App\Models\Model_login;

class Controller_login extends BaseController
{
    public function index() {
        return view('view_login');
    }

    function proses_login() {
        if ($this->request->isAJAX()) {
            $username= $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $model = new Model_login();
            $user = $model->where('username', $username)->where('password', $password)->first();

            if ($user) {
                $response = array('status' => 'success', 'message' => 'Login sukses');
            } else {
                $response = array('status' => 'error', 'message' => 'username atau password salah');
            }

            echo json_encode($json);
        }
    }
}