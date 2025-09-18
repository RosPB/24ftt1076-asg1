<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('messages')->get();
        return view('home', ['messages' => $messages]);
    }
}
