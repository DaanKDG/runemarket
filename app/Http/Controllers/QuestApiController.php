<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Quest;

class QuestApiController extends Controller
{
    public function updateQuests()
    {
        $quests = $this->getQuests();
        $string = 'guide';
        collect($quests['query']['embeddedin'])
            ->each(function ($quest, $key) use ($string) {

                if (strpos($quest['title'], $string) == false) {
                    Quest::updateOrCreate([
                        'quest_id' => $quest['pageid']
                    ], [
                        'name' => $quest['title']
                    ]);
                }
            });
            return redirect('/admin/quests')->with('success', 'Quests successfully updated');
    }
    public function getQuests()
    {
        $client = new Client();
        $uri = 'https://oldschool.runescape.wiki/api.php?action=query&list=embeddedin&eititle=Template:Quest_details&eilimit=max&format=json';
        $res = $client->get($uri);
        return json_decode($res->getBody()->getContents(), true);
    }
}
