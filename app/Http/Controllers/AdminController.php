<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;

class AdminController extends Controller
{
    public function index()
    {
        $quests = Quest::paginate('20');
        return view('admin.index', compact('quests'));
    }
}
