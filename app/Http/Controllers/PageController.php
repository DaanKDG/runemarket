<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;
use App\Account;
use App\Http\Resources\Account as specificAccount;

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
    public function minigames()
    {
        return view('layouts.minigames');
    }
    public function accounts()
    {
        return view('layouts.accounts');
    }
    public function details(Account $account) 
    {
       $skills = ["attack" => $account->attack, "defence" => $account->defence,'strength' => $account->strength,  'constitution' => $account->constitution , 
       'cooking' => $account->cooking,'construction' => $account->construction ,'farming' => $account->farming,'crafting' => $account->crafting ,'firemaking' => $account->firemaking , 
       'fishing' => $account->fishing,'fletching'  => $account->fletching ,'herblore' => $account->herblore,'hunter' => $account->hunter,'magic'  => $account->magic,
       'mining' => $account->mining,'prayer' => $account->prayer,'ranged' => $account->ranged,'runecrafting' => $account->runecrafting , 
       'slayer'  => $account->slayer,'smithing' => $account->smithing ,'agility' => $account->agility ,'thieving' => $account->thieving ,
       'woodcutting' => $account->woodcutting, 'total_level' => $account->total_level];

      return view('layouts.details', compact('account', 'skills'));
    }
}       
