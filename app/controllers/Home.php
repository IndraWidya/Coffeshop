<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';

        $this->view('Templates/header', $data);
        $this->view('Home/index');
        $this->view('Templates/footer');
    }
}
