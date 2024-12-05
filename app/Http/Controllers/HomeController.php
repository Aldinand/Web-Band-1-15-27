<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $merches = Merch::all();

        return view("index", compact("merches"));
    }
}
