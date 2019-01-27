<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;
use App\Account;
use App\Skill;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function accounts()
    {
        $accounts = Account::all();
        return view('admin.accounts', compact('accounts'));
    }
    public function editAccount(Request $request, Account $account) 
    {
        return view('admin.edit', compact('account'));
    }
    public function quests()
    {
        return view('admin.quests');
    }
    public function create()
    {
        $skills = Skill::all();
        return view('admin.create', compact('skills'));
    }
    public function store(Request $request)
    {
        $this ->validate($request, ['title' => 'required|max:40', 'information' => 'required|max:200', 'skill_image' => 'required|max:100','combat_level' => 'required','quest_points' => 'required', 'price'=> 'required', 'skill'=>'required']);

        $account = $request->all('title','information','skill_image', 'image_two', 'image_three','combat_level','quest_points','price');
        $skills = $request->get('skill');
        $mergedArray = array_merge($account, $skills);      
        Account::create($mergedArray); 

        return redirect('/admin/accounts')->with('success', 'Account successfully created'); 
    }
    public function destroyAccount(Request $request, Account $account) 
    {
        $account->delete();

        return redirect('/admin/accounts')->with('success', 'Account successfully removed');
    }
}
