<?php

namespace Application\Controllers;
use System\Traits\View;

class Home extends Controller{
    public function index() {
        $productName = "HI MOHAMMAD";
        $this->view('app.index',compact('productName'));
    }
}