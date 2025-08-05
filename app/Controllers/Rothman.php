<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function vista(): string
    {
        return view('rothman');
    }
}
