<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function indexCharacters() {
        $characters = config("characters");
        return view("characters", compact("characters"));
    }
}
