<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';

        $this->view('templates/headerHome');
        $this->view('Home/index');
        
    }
}
