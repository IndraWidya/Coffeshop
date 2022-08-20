<?php

class Order extends Controller
{
    public function index()
    {
        $data['title'] = 'Order';

        $this->view('Templates/header', $data);
        $this->view('Order/index');
        $this->view('Templates/footer');
    }
}
