<?php

namespace App\Http\Controllers;


use App\Models\Dream;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        return view('main');
    }

}
