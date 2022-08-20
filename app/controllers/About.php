<?php

class About extends Controller
{
    public function index()
    {
        $data['title'] = 'About';

        $this->view('Templates/header', $data);
        $this->view('About/index');
        $this->view('Templates/footer');
    }
}
