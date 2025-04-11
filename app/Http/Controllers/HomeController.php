<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexHome() {
        $comics = config("comics");
        return view('home', compact("comics"));
    }
}
