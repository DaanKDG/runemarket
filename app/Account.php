<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = array('price', 'title', 'information', 'attack',  
    'defence',  
    'strength',  
    'constitution' , 
    'cooking',  
    'construction' , 
   'farming',  
    'crafting' , 
    'firemaking' , 
    'fishing',  
    'fletching'  ,
    'herblore',  
    'hunter',  
   'magic'  ,
    'mining' , 
   'prayer',  
    'ranged'  ,
   'runecrafting' , 
    'slayer' , 
   'smithing' , 
    'agility' , 
    'thieving'  ,
    'woodcutting' , 
    'total_level','skill_image', 'image_two', 'image_three','quest_points','combat_level');
}
