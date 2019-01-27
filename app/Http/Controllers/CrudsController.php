<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;
use App\Account;
use App\Http\Resources\Quest as QuestResource;
use App\Http\Resources\AccountOverview as AccountResource;
use App\Http\Resources\Account as specificAccount;

class CrudsController extends Controller
{
    public function index()
    {
        return QuestResource::collection(Quest::paginate('15'));
    }
    public function update(Request $request, Quest $quest) 
    {
        $quest->name  = $request->input('name');
        $quest->price = $request->input('price');

        if ($quest->save())
        {
            return new QuestResource($quest);
        }
    }
    public function search(Request $request)
    {
        $quests = Quest::where('name', 'like', $request->keywords . '%' )->get();
        return QuestResource::collection($quests);
    }
    public function getAccounts(Request $request)
    {
        $accounts = Account::all();
        return AccountResource::collection($accounts);
    }
    public function getAccount(Account $account)
    {
        return specificAccount::collection($account);
    }
}
