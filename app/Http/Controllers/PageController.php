<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;

class PageController extends Controller
{
    public function index() 
    {
        return view('layouts.index');
    }
    public function questList()
     {
        $quests = Quest::all();
        return view('layouts.quests', compact('quests'));
    }
}       
