<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';

<<<<<<< HEAD
        $this->view('templates/headerHome');
        $this->view('Home/index');
        
=======
        $this->view('Templates/header', $data);
        $this->view('Home/index');
        $this->view('Templates/footer');
>>>>>>> a03c00ca0d55f94fb875584a6692caa8a945aa5b
    }
}
