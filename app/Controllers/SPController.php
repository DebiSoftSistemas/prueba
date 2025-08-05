<?php

namespace App\Controllers;

use Config\View;

class SPController extends BaseController{

    public function index(): string
    {
        return view('spheader,spbody,spfooter');
    }
}