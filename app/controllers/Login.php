<?php

class Login extends Controller {
    public function index()
    {
        if(!isset($_SESSION['user']))
        {
            $data['title'] = 'Login';

            $this->view('Templates/header', $data);
            $this->view('Login/index');
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
        $userData = $this->model('UserModel')->getUserByUname();
        if(!$userData)
        {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }
        else 
        {
            $_SESSION['user'] = [
                'id' => $userData['id'],
                'username' => $userData['username'],
                'name' => $userData['name'],
                'email' => $userData['email'],
                'phone' => $userData['phone'],
                'password' => $userData['password'],
                'role' => $userData['role'],
            ];

            header('Location: ' . BASE_URL);
            exit;
        }
    }
}