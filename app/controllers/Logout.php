<?php

class Logout extends Controller {
    public function index()
    {
        if(isset($_SESSION['user']))
        {
            // reset user session
            unset($_SESSION['user']);

            // move to login page
            header('Location: ' . BASE_URL . '/login');
            exit;
        }
    }
}