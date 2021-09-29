<?php

#use App\Http\Controllers;

#use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;

class PagesController extends Controller
{
     public function home()
    {
        return view('pages.home');
    }
}
