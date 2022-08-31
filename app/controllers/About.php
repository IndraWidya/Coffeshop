<?php

<<<<<<< HEAD
class about extends Controller
=======
class About extends Controller
>>>>>>> a03c00ca0d55f94fb875584a6692caa8a945aa5b
{
    public function index()
    {
        $data['title'] = 'About';

        $this->view('Templates/header', $data);
        $this->view('About/index');
        $this->view('Templates/footer');
    }
}
