<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Quest;

class getQuests extends Command
{

    protected $signature = 'get:quests';


    protected $description = 'get all current quests';

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
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
    }

    public function getQuests()
    {
        $client = new Client();
        $uri = 'https://oldschool.runescape.wiki/api.php?action=query&list=embeddedin&eititle=Template:Quest_details&eilimit=max&format=json';
        $res = $client->get($uri);
        return json_decode($res->getBody()->getContents(), true);
    }
}
