<?php

namespace App\Controllers;

use Config\View;

class Rothman extends BaseController
{
    public function vista(): string
    {
        // return view('rothman');
        return view('head') . view('body') . view('footer');
    }

    public function vacio(): string
    {
        return view('head')  . view('footer');
    }
}
