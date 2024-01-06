<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyNumberController extends Controller
{
    public function indexRandomNumber()
    {
        return random_int(0, 1001);
    }
}
