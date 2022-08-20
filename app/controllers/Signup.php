<?php

class Signup extends Controller {
    public function index()
    {
        if(!isset($_SESSION['user']))
        {
            $data['title'] = 'Signup';

            $this->view('Templates/header', $data);
            $this->view('Signup/index');
            $this->view('Templates/footer');
        }
        else 
        {
            header('Location: ' . BASE_URL);
            exit;
        }
    }

    public function sign()
    {
        $userData = [
            'username' => $_POST['username'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'password' => $_POST['password'],
            'cpassword' => $_POST['cpassword'],
            'role' => 'user',
        ];

        if($userData['password'] != $userData['cpassword'])
        {
            header('Location: ' . BASE_URL . '/signup');
            exit;
        }

        if($this->model('UserModel')->validate($userData) < 1)
        {
            if($this->model('UserModel')->addUser($userData) > 0)
            {
                header('Location: ' . BASE_URL . '/login');
                exit;
            }
        }

        header('Location: ' . BASE_URL . '/signup');
        exit;

    }
}