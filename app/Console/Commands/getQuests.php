<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Quest;

class getQuests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:quests';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get all current quests';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $quests = $this->getQeusts();
        $string = 'guide';
        collect($quests['query']['embeddedin'])
            ->each(function($quest, $key) use($string) {

                if (strpos($quest['title'], $string) == false) 
                {
                    Quest::updateOrCreate([
                            'quest_id' => $quest['pageid']
                            ],[ 
                             'name'    => $quest['title']
                            ]);
                }           
            });
    }

    public function getQeusts() 
    {
        $client = new Client();
        $uri = 'https://oldschool.runescape.wiki/api.php?action=query&list=embeddedin&eititle=Template:Quest_details&eilimit=max&format=json';
        $res = $client->get($uri);
        return json_decode($res->getBody()->getContents(), true);
    }  
}
