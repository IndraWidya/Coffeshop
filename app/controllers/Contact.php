<?php

class Contact extends Controller
{
    public function index()
    {
        $data['title'] = 'Contact';

        $this->view('Templates/header', $data);
        $this->view('Contact/index');
        $this->view('Templates/footer');
    }
}
