<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index() {
        return 'this is my page';
    }

    public function second() {
        return 'this is my second page';
    }

    public function third() {
        return 'this is my third page';
    }
}
