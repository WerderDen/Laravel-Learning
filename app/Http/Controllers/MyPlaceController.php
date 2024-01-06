<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function indexDocumentRoot()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}
