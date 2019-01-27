<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Skill;


class SkillsTableSeeder extends Seeder
{

    public function run()
    {
        $skills = ['attack', 'defence', 'strength', 'constitution' , 'cooking',  'construction' , 'farming',  
                   'crafting' , 'firemaking' , 'fishing',  'fletching'  ,'herblore',  'hunter',  'magic'  ,'mining' , 'prayer',  
                   'ranged'  ,'runecrafting' , 'slayer' , 'smithing' , 'agility' , 'thieving'  ,
                   'woodcutting', 'total_level'];

        foreach ($skills as $skill) {
            
            Skill::create([
                'skill_name' => $skill,
            ]);
           
        }            

    }
}
