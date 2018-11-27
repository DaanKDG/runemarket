<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;

class AdminController extends Controller
{
    public function index()
    {
        $questList = Quest::paginate('20');
        return view('admin.index', compact('questList'));
    }
    public function edit(Request $request, Quest $quest)
    {
        $questList = Quest::paginate('20');
        return view('admin.index', compact('questList', 'quest'));
    }

}
