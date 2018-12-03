<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quest;
use App\Http\Resources\Quest as QuestResource;

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
        $quests = Quest::where('name', 'like', '%' . $request->keywords . '%' )->get();
        return QuestResource::collection($quests);
    }
}
